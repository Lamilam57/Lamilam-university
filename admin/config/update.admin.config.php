<?php

    if (isset($_POST['submit'])) {
        require_once '../../config/conn.config.php';

        $id = $_POST['id'];

        $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);

        if (empty($full_name) || empty($username)) {
            $_SESSION['fields'] = '<div class="error text-center">Fill all Fields</div>';
            header("Location: ../update.admin.php?id=$id");
        } else {
            $sql = "UPDATE admin SET
                full_name = '$full_name',
                username = '$username'
                WHERE id = $id
            ";
            $res = mysqli_query($conn, $sql);
            if ($res == true) {
                $_SESSION['update'] = '<div class="success text-center">Update Successful</div>';
                header("Location: ../user.php");
                exit();
            } else {
                $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                header("Location: ../update.admin.php");
            }
            
        }
        
    }
    else{
        header("Location: ../update.admin.php");
        exit();
    }