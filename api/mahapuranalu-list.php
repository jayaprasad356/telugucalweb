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

if (isset($_POST['mahabharatham']) && $_POST['mahabharatham'] == 1) {

    $sql = "SELECT * FROM `mahabharatham`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Mahabharatham Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['mahabharatham_menu']) && $_POST['mahabharatham_menu'] == 1) {
    $sql = "SELECT * FROM `mahabharatham_menu`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Mahabharatham Menu Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['mahabharatham_submenu']) && $_POST['mahabharatham_submenu'] == 1) {
    $sql = "SELECT * FROM `aksharalu`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Mahabharatham Submenu Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
//<<-----Ramayanam list---->
if (isset($_POST['ramayanam']) && $_POST['ramayanam'] == 1) {
    $sql = "SELECT * FROM `ramayanam`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Ramayanam Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['ramayanam_menu']) && $_POST['ramayanam_menu'] == 1) {
    $ramayanam_id = $db->escapeString($_POST['ramayanam_id']);
    $sql = "SELECT * FROM `ramayanam_menu` WHERE ramayanam_id = '$ramayanam_id'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Ramayanam Menu Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['ramayanam_submenu']) && $_POST['ramayanam_submenu'] == 1) {
    $ramayanam_id = $db->escapeString($_POST['ramayanam_id']);
    $ramayanam_menu_id = $db->escapeString($_POST['ramayanam_menu_id']);
    $sql = "SELECT * FROM `ramayanam_submenu` WHERE ramayanam_id = '$ramayanam_id' AND ramayanam_menu_id = '$ramayanam_menu_id'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Ramayanam Submenu Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}

///<<-----Bhagawath Geetha --->>
if (isset($_POST['bhagawath_geetha']) && $_POST['bhagawath_geetha'] == 1) {
    $sql = "SELECT * FROM `bhagawath_geetha`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Bhagawath Geetha Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['bhagawath_geetha_menu']) && $_POST['bhagawath_geetha_menu'] == 1) {
    $sql = "SELECT * FROM `bhagawath_geetha_menu`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Bhagawath Geetha Menu Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['bhagawath_geetha_submenu']) && $_POST['bhagawath_geetha_submenu'] == 1) {
    $sql = "SELECT * FROM `bhagawath_geetha_submenu`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Bhagawath Geetha Submenu Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}

//<<-----Bhagawatham list---->
if (isset($_POST['bhagawatham']) && $_POST['bhagawatham'] == 1) {
    $sql = "SELECT * FROM `bhagawatham`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Bhagawatham Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['bhagawatham']) && $_POST['bhagawatham_menu'] == 1) {
    $sql = "SELECT * FROM `bhagawatham_menu`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Bhagawatham Menu Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['bhagawatham_submenu']) && $_POST['bhagawatham_submenu'] == 1) {
    $sql = "SELECT * FROM `bhagawatham_submenu`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Bhagawatham Submenu Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}

//<<-----Telugu_sethakamulu list---->
if (isset($_POST['telugu_sethakamulu']) && $_POST['telugu_sethakamulu'] == 1) {
    $sql = "SELECT * FROM `telugu_sethakamulu`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Telugu Sethakamulu Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['telugu_sethakamulu']) && $_POST['telugu_sethakamulu_menu'] == 1) {
    $sql = "SELECT * FROM `telugu_sethakamulu_menu`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Telugu Sethakamulu Menu Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}

//<<-----Shivapuranam list---->
if (isset($_POST['shivapuranam']) && $_POST['shivapuranam'] == 1) {
    $sql = "SELECT * FROM `shivapuranam`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Shivapuranam Listed Successfullty";
        $response['data'] = $res;
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Not Found";
        print_r(json_encode($response));
    }

}
if (isset($_POST['shivapuranam']) && $_POST['shivapuranam_menu'] == 1) {
    $sql = "SELECT * FROM `shivapuranam_menu`";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if($num>=1){
        $response['success'] = true;
        $response['message'] = "Shivapuranam Menu Listed Successfullty";
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