<?php

if (isset($_POST['submit'])) {
    
    require_once '../../config/conn.config.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dean = mysqli_real_escape_string($conn, $_POST['dean']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    if (empty($name) || empty($address)) {
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../create.faculty.php");
        exit();
    } else {
        $a_z = "ABCDEFGHJKLMNPQRSTUVWXYZ";
        $letter = substr(str_shuffle($a_z), 0, 2);
        $code = rand(10, 99) . $letter;
        $sql = "INSERT INTO faculty SET
            name = '$name',
            code = '$code',
            dean = '$dean',
            address = '$address'
        ";
        $res = mysqli_query($conn, $sql);
        
        if ($res == true) {
            $_SESSION['create'] = '<div class="success text-center">Faculty Created Sucessfully</div>';
            header("Location: ../faculty.php");
            exit();
        } else {
            $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
            header("Location: ../create.faculty.php");
            exit();
        }
        
    }
    
    
    
} else {
    header("Location: ../create.faculty.php");
    exit();
}
