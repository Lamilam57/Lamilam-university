<?php

require_once '../config/conn.config.php';

$id = $_GET['id'];

$sql = "DELETE FROM course WHERE id = $id";
$res = mysqli_query($conn, $sql);

if ($res == true) {
    $_SESSION['delete'] = '<div class="success text-center">Course Deleted Successfully</div>';
    header("Location: course.php");
    exit();
} 
else {
    $_SESSION['error'] = '<div class="error text-center">Unable to Delete Course</div>';
    header("Location: course.php");
    exit();
}