<?php

try {
    //code...
    $pdo = new PDO('mysql:host=localhost;port=8888;dbname=new_database', 'tester13', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo "Error : " . $ex->getMessage() . "<br/>";
    die();
}
