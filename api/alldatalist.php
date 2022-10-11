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
unset($temp);
$sql = "SELECT * FROM `muhurtham`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['muhurtham'] = $row['muhurtham'];
    $rows[] = $temp;
}
$response['muhurtham_list'] = $rows;
unset($temp);
$sql = "SELECT * FROM `muhurtham_tab`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['muhurtham_id'] = $row['muhurtham_id'];
    $temp['title'] = $row['title'];
    $temp['description'] = $row['description'];
    $rows[] = $temp;
}
$response['muhurtham_tab_list'] = $rows;
unset($temp);
$sql = "SELECT * FROM `poojalu`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['name'] = $row['name'];
    $temp['image'] = DOMAIN_URL . $row['image'];
    $rows[] = $temp;
}
$response['poojalu_list'] = $rows;
unset($temp);
$sql = "SELECT * FROM `poojalu_submenu`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['poojalu_id'] = $row['poojalu_id'];
    $temp['name'] = $row['name'];
    $temp['image'] = DOMAIN_URL . $row['image'];
    $rows[] = $temp;
}
$response['poojalu_sub_menu_list'] = $rows;
unset($temp);
$sql = "SELECT *,ptv.id AS id FROM `poojalu_tab` pt,`poojalu_tab_variant` ptv WHERE ptv.poojalu_tab_id = pt.id";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['poojalu_id'] = $row['poojalu_id'];
    $temp['subcategory_id'] = $row['subcategory_id'];
    $temp['title'] = $row['title'];
    $temp['description'] = $row['description'];
    $temp['sub_title'] = $row['sub_title'];
    $temp['sub_description'] = $row['sub_description'];
    $rows[] = $temp;
}
$response['poojalu_tab_list'] = $rows;
unset($temp);
$sql = "SELECT * FROM `grahalu`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['name'] = $row['name'];
    $temp['image'] = DOMAIN_URL . $row['image'];
    $rows[] = $temp;
}
$response['grahalu_list'] = $rows;
unset($temp);
$sql = "SELECT * FROM `grahalu_submenu`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['grahalu_id'] = $row['grahalu_id'];
    $temp['name'] = $row['name'];
    $temp['image'] = DOMAIN_URL . $row['image'];
    $rows[] = $temp;
}
$response['grahalu_sub_menu_list'] = $rows;
unset($temp);
$sql = "SELECT *,gtv.id AS id FROM `grahalu_tab` gt,`grahalu_tab_variant` gtv WHERE gtv.grahalu_tab_id = gt.id";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['grahalu_id'] = $row['grahalu_id'];
    $temp['subcategory_id'] = $row['subcategory_id'];
    $temp['title'] = $row['title'];
    $temp['description'] = $row['description'];
    $temp['sub_title'] = $row['sub_title'];
    $temp['sub_description'] = $row['sub_description'];
    $rows[] = $temp;
}
$response['grahalu_tab_list'] = $rows;
unset($temp);
$sql = "SELECT * FROM `nakshatralu`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['name'] = $row['name'];
    $temp['image'] = DOMAIN_URL . $row['image'];
    $rows[] = $temp;
}
$response['nakshatralu_list'] = $rows;
unset($temp);
$sql = "SELECT * FROM `video`";
$db->sql($sql);
$res = $db->getResult();
$rows = array();
$temp = array();
foreach ($res as $row) {
    $temp['id'] = $row['id'];
    $temp['title'] = $row['title'];
    $temp['link'] = $row['link'];
    $rows[] = $temp;
}
$response['video_list'] = $rows;
unset($temp);
print_r(json_encode($response));
?>