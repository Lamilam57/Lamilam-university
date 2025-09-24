<?php

if (isset($_POST['submit'])) {

    require_once '../../config/conn.config.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $code = mysqli_real_escape_string($conn, $_POST['code']);
    
    if (empty($name) || empty($code)) {
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../create.course.php");
        exit();
    } else {
        $sql = "INSERT INTO course SET
            name = '$name',
            code = '$code'
        ";
        $res = mysqli_query($conn, $sql);
        
        if ($res == true) {
            $_SESSION['create'] = '<div class="success text-center">Faculty Created Sucessfully</div>';
            header("Location: ../course.php");
            exit();
        } else {
            $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
            header("Location: ../create.course.php");
            exit();
        }
        
    }
} else {
    header("Location: ../create.course.php");
    exit();
}
