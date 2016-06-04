<?php

if(!isset($_SESSION)){
    session_start();
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

//Connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=deliveryapp", $username, $password);
    // PDO error mode set
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection succesful";
    }
catch(PDOException $e){
    
    echo "Connection failed:" . $e->getMessage;
}
?>