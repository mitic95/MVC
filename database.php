<?php

$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'authent';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e){
    die("Connection failed: " . $e->getMessage());
}
// create new method in QueryBulder with this performance