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

if (empty($_POST['date'])) {
    $response['success'] = false;
    $response['message'] = "Date is Empty";
    print_r(json_encode($response));
    return false;
}

$date = $db->escapeString($_POST['date']);

$sql = "SELECT * FROM `panchangam` WHERE date = '$date'";
$db->sql($sql);
$res = $db->getResult();
$num = $db->numRows($res);
if ($num >= 1){        
    foreach ($res as $row) {
        $temp['id'] = $row['id'];
        $temp['date'] = $row['date'];
        $temp['time1'] = $row['time1'];
        $temp['time2'] = $row['time2'];
        $temp['time3'] = $row['time3'];
        $temp['time4'] = $row['time4'];
        $temp['info'] = $row['info'];
        $id = $row['id'];
        $sql = "SELECT * FROM `panchangam_variant` WHERE panchangam_id ='$id'";
        $db->sql($sql);
        $res = $db->getResult();
        $temp['tab'] = $res;
        $rows[] = $temp;

        
    }
    $response['success'] = true;
    $response['message'] = "Panchangam List Successfullty";
    $response['data'] = $rows;
    print_r(json_encode($response));
}
else{
    $response['success'] = false;
    $response['message'] = "No Data Found";
    print_r(json_encode($response));

}
?>