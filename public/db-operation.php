<?php
session_start();
// include_once('../api-firebase/send-email.php');
include('../includes/crud.php');
$db = new Database();
$db->connect();
$db->sql("SET NAMES 'utf8'");

include_once('../includes/custom-functions.php');
$fn = new custom_functions;
include_once('../includes/functions.php');
$function = new functions;

if (isset($_POST['delete_variant'])) {
    $v_id = $db->escapeString(($_POST['id']));
    $sql = "DELETE FROM panchangam_variant WHERE id = $v_id";
    $db->sql($sql);
    $result = $db->getResult();
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}
//yearly horoscope variant
if (isset($_POST['delete_variant'])) {
    $yearly_id = $db->escapeString(($_POST['id']));
    $sql = "DELETE FROM yearly_horoscope_variant WHERE id = $yearly_id";
    $db->sql($sql);
    $result = $db->getResult();
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}

//poojalu tab variant
if (isset($_POST['delete_variant'])) {
    $tab_id = $db->escapeString(($_POST['id']));
    $sql = "DELETE FROM poojalu_tab_variant WHERE id = $tab_id";
    $db->sql($sql);
    $result = $db->getResult();
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}

//get subcategories by category
if (isset($_POST['change_category'])) {
        if ($_POST['poojalu_id'] == '') {
            $sql = "SELECT * FROM poojalu_submenu";
        } else {
            $poojalu_id = $db->escapeString($fn->xss_clean($_POST['poojalu_id']));
            $sql = "SELECT * FROM poojalu_submenu WHERE poojalu_id=" . $poojalu_id;
        }

    $db->sql($sql);
    $res = $db->getResult();
    if (!empty($res)) {
        foreach ($res as $row) {
            echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
        }
    } else {
        echo "<option value=''>--No Sub Category is added--</option>";
    }
}

if (isset($_POST['category'])) {
    if ($_POST['poojalu_id'] == '') {
        $sql = "SELECT * FROM poojalu_submenu";
    } else {
        $poojalu_id = $db->escapeString($fn->xss_clean($_POST['poojalu_id']));
        $sql = "SELECT * FROM poojalu_submenu WHERE poojalu_id=" . $poojalu_id;
    }

    $db->sql($sql);
    $res = $db->getResult();
    if (!empty($res)) {
        foreach ($res as $row) {
            echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
        }
    } else {
        echo "<option value=''>--No Subcategory is added--</option>";
    }
} 

if (isset($_POST['find_subcategory'])) {
        $poojalu_id = $db->escapeString($fn->xss_clean($_POST['poojalu_id']));
        $sql = "SELECT * FROM poojalu_submenu WHERE poojalu_id=" . $poojalu_id;
        $db->sql($sql);
        $res = $db->getResult();
        if (!empty($res)) {
            foreach ($res as $row) {
                echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
            }
        } else {
            echo "<option value=''>--No SubCategory is added--</option>";
        }
}


if (isset($_POST['week'])) {
    $year = $db->escapeString(($_POST['year']));
    $month = $db->escapeString(($_POST['month']));
    if(!empty($year) && !empty($month)){
        $month = $month.' 25 2010';
        $month = date('m', strtotime($month));
        $list=array();
        $week=array();
      
        for($d=1; $d<=31; $d++)
        {
            $time=mktime(12, 0, 0, $month, $d, $year);          
            if (date('m', $time)==$month){
                $list[]=date('Y-m-d', $time);
                $value = getStartAndEndDate(date("W", strtotime(date('Y-m-d', $time))),$year);
                if(!in_array($value, $week)){
                  $week[] = $value;
        
                }
                 
        
            }      
        
        }
        
        for($i=0; $i<=count($week) - 1; $i++)
        { 
            echo "<option value= " . $week[$i] . " >" . $week[$i]. "</option>";

        }
        

    }else{
        echo "";


    }


    
}
function getStartAndEndDate($week, $year) {
    $dto = new DateTime();
    $dto->setISODate($year, $week);
    $ret['week_start'] = $dto->format('M-d,Y');
    $startdate = $dto->format('M-d,Y');
    $dto->modify('+6 days');
    $ret['week_end'] = $dto->format('Y-m-d');
    $enddate = $dto->format('M-d,Y');
    $result = $startdate.'_to_'.$enddate;
    
    return $result;
  }
if (isset($_POST['bulk_upload']) && $_POST['bulk_upload'] == 1) {
    $count = 0;
    $count1 = 0;
    $error = false;
    $filename = $_FILES["upload_file"]["tmp_name"];
    $result = $fn->validate_image($_FILES["upload_file"], false);
    if (!$result) {
        $error = true;
    }
    if ($_FILES["upload_file"]["size"] > 0  && $error == false) {
        $file = fopen($filename, "r");
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
            // print_r($emapData);
            if ($count1 != 0) {
                $emapData[0] = trim($db->escapeString($emapData[0]));
                $emapData[1] = trim($db->escapeString($emapData[1]));          
                $emapData[2] = trim($db->escapeString($emapData[2]));
                $emapData[3] = trim($db->escapeString($emapData[3]));
                $emapData[4] = trim($db->escapeString($emapData[4]));
                if (empty($emapData[0])) {
                    echo '<p class="alert alert-danger">Date  is empty at row - ' . $count . '</div>';
                    return false;
                }
                if (empty($emapData[1])) {
                    echo '<p class="alert alert-danger">Sunrise Time  is empty at row - ' . $count . '</div>';
                    return false;
                }
                if (empty($emapData[2])) {
                    echo '<p class="alert alert-danger">Sunset time  is empty at row - ' . $count . '</div>';
                    return false;
                }
                if (empty($emapData[3])) {
                    echo '<p class="alert alert-danger">Moonrise Time  is empty at row - ' . $count . '</div>';
                    return false;
                }
                if (empty($emapData[4])) {
                    echo '<p class="alert alert-danger">Moonset Time  is empty at row - ' . $count . '</div>';
                    return false;
                }

            }

            $count1++;
        }
        fclose($file);
        $file = fopen($filename, "r");
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
            // print_r($emapData);
            if ($count1 != 0) {
                $emapData[0] = trim($db->escapeString($emapData[0]));
                $emapData[1] = trim($db->escapeString($emapData[1]));          
                $emapData[2] = trim($db->escapeString($emapData[2]));
                $emapData[3] = trim($db->escapeString($emapData[3]));
                $emapData[4] = trim($db->escapeString($emapData[4]));
                $data = array(
                    'date'=>$emapData[0],
                    'sunrise'=>$emapData[1],
                    'sunset' => $emapData[2],
                    'moonrise' => $emapData[3],
                    'moonset' => $emapData[4],
                   
                );
                $db->insert('panchangam', $data);
                


            }

            $count1++;
        }
        fclose($file);
        echo "<p class='alert alert-success'>CSV file is successfully imported!</p><br>";
    } else {
        echo "<p class='alert alert-danger'>Invalid file format! Please upload data in CSV file!</p><br>";
    }
}
if (isset($_POST['bulk_upload_tab']) && $_POST['bulk_upload_tab'] == 1) {
    $count = 0;
    $count1 = 0;
    $error = false;
    $filename = $_FILES["upload_file"]["tmp_name"];
    $result = $fn->validate_image($_FILES["upload_file"], false);
    if (!$result) {
        $error = true;
    }
    if ($_FILES["upload_file"]["size"] > 0  && $error == false) {
        $file = fopen($filename, "r");
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
            // print_r($emapData);
            if ($count1 != 0) {
                $emapData[0] = trim($db->escapeString($emapData[0]));
                $emapData[1] = trim($db->escapeString($emapData[1]));          
                $emapData[2] = trim($db->escapeString($emapData[2]));
                if (empty($emapData[0])) {
                    echo '<p class="alert alert-danger">Panchangam Id  is empty at row - ' . $count . '</div>';
                    return false;
                }
                if (empty($emapData[1])) {
                    echo '<p class="alert alert-danger">Title is empty at row - ' . $count . '</div>';
                    return false;
                }
                if (empty($emapData[2])) {
                    echo '<p class="alert alert-danger">Description  is empty at row - ' . $count . '</div>';
                    return false;
                }

            }

            $count1++;
        }
        fclose($file);
        $file = fopen($filename, "r");
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
            // print_r($emapData);
            if ($count1 != 0) {
                $emapData[0] = trim($db->escapeString($emapData[0]));
                $emapData[1] = trim($db->escapeString($emapData[1]));          
                $emapData[2] = trim($db->escapeString($emapData[2]));
                $data = array(
                    'panchangam_id'=>$emapData[0],
                    'title'=>$emapData[1],
                    'description' => $emapData[2],                   
                );
                $db->insert('panchangam_variant', $data);
                


            }

            $count1++;
        }
        fclose($file);
        echo "<p class='alert alert-success'>CSV file is successfully imported!</p><br>";
    } else {
        echo "<p class='alert alert-danger'>Invalid file format! Please upload data in CSV file!</p><br>";
    }
}



