<?php

require_once '../config/conn.config.php';

$id = $_GET['id'];

$sql = "DELETE FROM admin WHERE id = $id";
$res = mysqli_query($conn, $sql);

if ($res == true) {
    $_SESSION['delete'] = '<div class="success text-center">Admin Deleted Successfully</div>';
    header("Location: user.php");
    exit();
} 
else {
    $_SESSION['error'] = '<div class="error text-center">Unable to Delete Admin</div>';
    header("Location: user.php");
    exit();
}

