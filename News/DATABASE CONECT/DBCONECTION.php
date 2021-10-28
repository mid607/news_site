<?php

$databaseconnction = mysqli_connect('localhost','root','');



$dsn = 'mysql:host=localhost;dbname=weskresha;';
$user = 'root';
$password = '';
$opition = array(

    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

);

try {
    $dataConnction = new PDO($dsn, $user, $password, $opition);

    $dataConnction->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "good";
} catch (PDOException $e) {

    echo "faild" . $e->getMessage();
}

?>