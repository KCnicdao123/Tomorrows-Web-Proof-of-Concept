<?php

//connecting the database using php
$conn = mysqli_connect("localhost", "root", "", "tomorrows_web_proj");
//Error if database cannot connect
if(!$conn){
    die("Connection Error");
}

//Variable for SQL Host Database
$dsn = "mysql:host=localhost;dbname=tomorrows_web_proj";
$dbfull_name = "root";

//Try catch block for error handling
try {
    $pdo = new PDO($dsn, $dbfull_name);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $e) {
    echo "Connection failed: " . $e->getMessage();
}

