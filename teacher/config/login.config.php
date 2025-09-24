<?php

if (isset($_POST['submit'])) {
    require_once '../../config/conn.config.php';
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admin";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    
    if (empty($username) || empty($password)){
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../login.php");
        exit();
    }
    else {
        $row = mysqli_fetch_assoc($res);
        $dBusername = $row['username'];
        $dBpassword = $row['password'];
        if ($username != $dBusername) {
            $_SESSION['username'] = '<div class="error text-center">Pls Enter Correct Username</div>';
            header("Location: ../login.php");
            exit();
        } 
        else {
            $check = password_verify($password, $dBpassword);
            if ($check != 1) {
                $_SESSION['password'] = '<div class="error text-center">Pls Enter Correct Password</div>';
                header("Location: ../login.php");
                exit();
            } 
            else {
                $_SESSION['id'] = $row['id'];
                $_SESSION['admin-check'] = $row['username'];

                $_SESSION['login'] = '<div class="success text-center">Login Sucessful</div>';
                header("Location: ../index.php");
                exit();
            }
            
        }
    }
    
} else {
    header("Location: ../login.php");
    exit();
}

