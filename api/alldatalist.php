<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


include_once('../includes/crud.php');
$db = new Database();
$db->connect();


$sql = "SELECT * FROM `panchangam`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['date'] = $row['date'];
    $temp['sunrise'] = date('h:i a', strtotime($row['sunrise']));
    $temp['sunset'] = date('h:i a', strtotime($row['sunset']));
    $temp['moonrise'] = date('h:i a', strtotime($row['moonrise']));
    $temp['moonset'] = date('h:i a', strtotime($row['moonset']));
    $rows[] = $temp;
}
$response['success'] = true;
$response['message'] = "Panchangam List Successfullty";
$response['panchangam_list'] = $rows;

unset($temp);
$sql = "SELECT * FROM `panchangam_variant`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['panchangam_id'] = $row['panchangam_id'];
    $temp['title'] = $row['title'];
    $temp['description'] = $row['description'];
    $rows[] = $temp;
}
$response['panchangam_tab_list'] = $rows;
unset($temp);
$sql = "SELECT * FROM `festivals`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['date'] = $row['date'];
    $temp['festival'] = $row['festival'];
    $rows[] = $temp;
}
$response['festivals_list'] = $rows;
print_r(json_encode($response));
?>