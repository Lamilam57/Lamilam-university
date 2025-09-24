<?php

    if (isset($_POST['submit'])) {
        require_once '../../config/conn.config.php';

        $id = $_POST['id'];

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $code = mysqli_real_escape_string($conn, $_POST['code']);
        
        if (empty($name) || empty($code)) {
            $_SESSION['fields'] = '<div class="error text-center">Fill all Fields</div>';
            header("Location: ../update.course.php?id=$id");
        } else {
            $sql = "UPDATE course SET
                name = '$name',
                code = '$code'
                WHERE code = '$id'
            ";
            $res = mysqli_query($conn, $sql);
            if ($res == true) {
                $_SESSION['update'] = '<div class="success text-center">Update Successful</div>';
                header("Location: ../course.php");
                exit();
            } else {
                $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                header("Location: ../update.course.php?id=$id");
            }
            
        }
        
    }
    else{
        header("Location: ../update.course.php");
        exit();
    }
    