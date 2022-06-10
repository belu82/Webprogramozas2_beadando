<?php

    $host = 'localhost';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host = $host; dbname=$db;charset = $charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        //echo "Van db";

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch (PDOException $e){
        echo "<h1 class=''>No db found</h1>";
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
    require_once 'user.php';
    $user = new user($pdo);

    $user->insertUser("user", "password");

