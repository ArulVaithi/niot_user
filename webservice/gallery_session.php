<?php 
include("../include/db_connection.php");
session_start();
    if(isset($_POST['id'])){  
        $_SESSION['gallery_id']= $_POST['id'];
       // $_SESSION['currentlang'] = $_POST['lang'];
        $result['valid'] = TRUE;
    }
    $result['gallery_id']  = $_SESSION['gallery_id'];
   // $result['lang']  = $_SESSION['currentlang'];
    // echo  json_encode($_SESSION['session_empcode']);
    echo json_encode($result);
    exit();
 ?>