<?php
$id = $_GET['id'];
session_start();
session_unset();

header("Location: login.php");
exit();