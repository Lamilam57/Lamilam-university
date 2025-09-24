<?php

session_start();

$dbServerName = 'localhost';
$dbUsername =  'root';
$dbPassword = '';
$dbName = 'lamilam-uni';

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword,$dbName);

if (!$conn) {
    die("Database Error: " . mysqli_connect_error($conn));
}