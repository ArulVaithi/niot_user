<?php
// include '../include/session.php';
include("../include/db_connection.php");
// $sessionId = $_SESSION['userId'];
$lang = $_POST['lang'];
$jsonvalue = $_POST['jsonvalue'];
$operation = $_POST['operation'];
$currdate = date('Y-m-d h:i:s');

if ($operation == 'get') {
    $menu = "select menu_$lang as menu from mst_menu limit 1";

    $resultmenu = pg_query($db, $menu);
    $row = pg_fetch_assoc($resultmenu);
    if ($resultmenu) {
        $data['status'] = 'ok';
        // $data['result'] = $menu;
        // $data['result'] = '';
        $data['getdata'] = $row;

        // $data['result'] = $userData;

    } else {
        // $userData = pg_fetch_assoc($result);
        $data['status'] = 'err';
        // $data['result'] = $menu;
        $data['getdata'] = $row;
    }
    echo json_encode($data);
}
?>