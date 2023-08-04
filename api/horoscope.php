<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('Asia/Kolkata');

include_once('../includes/crud.php');
$db = new Database();
$db->connect();
if ($_POST['type'] == 'Daily'){
    $date = date('Y-m-d');
    $rasi = $db->escapeString($_POST['rasi']);
    $sql = "SELECT * FROM `daily_horoscope` WHERE date = '$date' AND rasi = '$rasi' AND title = '$title' AND description = '$description'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Daily List Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }

}
if ($_POST['type'] == 'Weekly'){
    $year = date('Y');
    $month = date('F');
    $week = getStartAndEndDate(date("W", strtotime(date('Y-m-d'))),$year);
    $rasi = $db->escapeString($_POST['rasi']);
    $sql = "SELECT * FROM `weekly_horoscope` WHERE week = '$week' AND rasi = '$rasi'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Weekly List Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }

}
if ($_POST['type'] == 'Monthly'){
    $year = date('Y');
    $month = date('F');
    $rasi = $db->escapeString($_POST['rasi']);
    $sql = "SELECT * FROM `monthly_horoscope` WHERE year = '$year' AND month = '$month' AND rasi = '$rasi'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Monthly List Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }

}
if ($_POST['type'] == 'Yearly'){
    $year = date('Y');
    $rasi = $db->escapeString($_POST['rasi']);
    $sql = "SELECT * FROM `yearly_horoscope` WHERE year = '$year' AND rasi = '$rasi'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $rows = array();
        $temp = array();
        foreach ($res as $row) {
            $id = $row['id'];
            $temp['id'] = $row['id'];
            $temp['rasi'] = $row['rasi'];
            $temp['year'] = $row['year'];
            $temp['adhayam'] = $row['adhayam'];
            $temp['vyayam'] = $row['vyayam'];
            $temp['rajapujyam'] = $row['rajapujyam'];
            $temp['aavamanam'] = $row['aavamanam'];
            $temp['title'] = $row['title'];
            $temp['description'] = $row['description'];
            $sql = "SELECT * FROM `yearly_horoscope_variant` WHERE yearly_horoscope_id = '$id'";
            $db->sql($sql);
            $res = $db->getResult();
            $temp['yearly_horoscope_variant'] = $res;
            $rows[] = $temp;
        }
        $response['success'] = true;
        $response['message'] = "Yearly List Successfullty";
        $response['data'] = $rows;
        print_r(json_encode($response));

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
?>