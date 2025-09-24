<?php

require_once '../config/conn.config.php';

$id = $_GET['id'];

$sql = "DELETE FROM department WHERE id = $id";
$res = mysqli_query($conn, $sql);

if ($res == true) {
    $_SESSION['delete'] = '<div class="success text-center">Faculty Deleted Successfully</div>';
    header("Location: department.php");
    exit();
} 
else {
    $_SESSION['error'] = '<div class="error text-center">Unable to Delete Faculty</div>';
    header("Location: department.php");
    exit();
}