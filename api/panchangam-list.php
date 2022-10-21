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
if (isset($_POST['gowri']) && $_POST['gowri'] == 1) {
    $year = $db->escapeString($_POST['year']);
    $day = $db->escapeString($_POST['day']);
    $sql = "SELECT * FROM `gowri` WHERE day = '$day' AND year = '$year'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $rows = array();
        $temp = array();
        foreach ($res as $row) {
            $temp['id'] = $row['id'];
            $temp['year'] = $row['year'];
            $temp['day'] = $row['day'];
            $temp['time'] = $row['time'];
            $temp['description'] = $row['description'];
            $rows[] = $temp;
        }
        $response['success'] = true;
        $response['message'] = "Gowri Panchangam List Successfullty";
        $response['data'] = $rows;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['hora_chakram']) && $_POST['hora_chakram'] == 1) {
    $year = $db->escapeString($_POST['year']);
    $day = $db->escapeString($_POST['day']);
    $sql = "SELECT * FROM `hora_chakram` WHERE day = '$day' AND year = '$year'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $rows = array();
        $temp = array();
        foreach ($res as $row) {
            $temp['id'] = $row['id'];
            $temp['year'] = $row['year'];
            $temp['day'] = $row['day'];
            $temp['time'] = $row['time'];
            $temp['description'] = $row['description'];
            $rows[] = $temp;
        }
        $response['success'] = true;
        $response['message'] = "Hora Chakram List Successfullty";
        $response['data'] = $rows;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['thidhi']) && $_POST['thidhi'] == 1) {
    $year = $db->escapeString($_POST['year']);
    $month = $db->escapeString($_POST['month']);
    $sql = "SELECT * FROM `thidhi` t,`thidhi_variant` tv WHERE tv.thidhi_id = t.id AND t.month = '$month' AND t.year = '$year'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $rows = array();
        $temp = array();
        foreach ($res as $row) {
            $temp['id'] = $row['id'];
            $temp['year'] = $row['year'];
            $temp['month'] = $row['month'];
            $temp['title'] = $row['title'];
            $temp['description'] = $row['description'];
            $rows[] = $temp;
        }
        $response['success'] = true;
        $response['message'] = "Thidhi List Successfullty";
        $response['data'] = $rows;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['rahukalam']) && $_POST['rahukalam'] == 1) {
    $year = $db->escapeString($_POST['year']);
    $day = $db->escapeString($_POST['day']);
    $sql = "SELECT * FROM `rahukalams` WHERE day = '$day' AND year = '$year'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $rows = array();
        $temp = array();
        foreach ($res as $row) {
            $temp['id'] = $row['id'];
            $temp['year'] = $row['year'];
            $temp['day'] = $row['day'];
            $temp['rahukalam'] = $row['rahukalam'];
            $temp['yamangandam'] = $row['yamangandam'];
            $rows[] = $temp;
        }
        $response['success'] = true;
        $response['message'] = "Rahukalams List Successfullty";
        $response['data'] = $rows;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['karanam']) && $_POST['karanam'] == 1) {
    $sql = "SELECT * FROM `karanam`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Karanam List Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
?>