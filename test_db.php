<?php
$host = "localhost";
$db = "my_database";
$user = "root";
$space = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}