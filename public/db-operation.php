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
                
                
            

                // $data = array(
                //     'date'=>$emapData[0],
                //     'sunrise'=>$emapData[1],
                //     'sunset' => $emapData[2],
                //     'moonrise' => $emapData[3],
                //     'moonset' => $emapData[4],
                   
                // );
                // $db->insert('panchangam', $data);
                


            }

            $count1++;
        }
        fclose($file);
        echo "<p class='alert alert-success'>CSV file is successfully imported!</p><br>";
    } else {
        echo "<p class='alert alert-danger'>Invalid file format! Please upload data in CSV file!</p><br>";
    }
}



