<?php
    require_once "db_helper.php";
    if(!$_GET['id']){
        echo 'error';
    }else{
        $id = $_GET['id'];
        $result = $crud->deleteAttendee($id);
        if($result){
            header("Location: viewrecords.php");
        }else{
            echo '';
        }
    }

?>