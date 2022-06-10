<?php
    require_once 'db_helper.php';
    require_once 'header.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $vezeteknev = $_POST['vezeteknev'];
        $keresztnev = $_POST['keresztnev'];
        $szulido = $_POST['szulido'];
        $email = $_POST['email'];
        $telszam = $_POST['telszam'];
        $speciality = $_POST['speciality'];

        $result = $crud->editAttendee($id, $vezeteknev, $keresztnev, $szulido, $email, $telszam, $speciality);

        if($result){
            header('Location: viewrecords.php');
        }else{
            echo 'error';
        }
    }else{
        echo 'hiba';
    }

?>