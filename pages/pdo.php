<?php

$servername = "localhost";
$dbname = "users";
$password = "admin";

try{

$conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", $password );

$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

?>