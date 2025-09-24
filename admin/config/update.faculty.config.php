<?php

    if (isset($_POST['submit'])) {
        require_once '../../config/conn.config.php';

        $id = $_POST['id'];

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $dean = mysqli_real_escape_string($conn, $_POST['dean']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);


        if (empty($name) || empty($dean) || empty($address)) {
            $_SESSION['fields'] = '<div class="error text-center">Fill all Fields</div>';
            header("Location: ../update.faculty.php?id=$id");
        } else {
            $sql = "UPDATE faculty SET
                name = '$name',
                dean = '$dean',
                address = '$address'
                WHERE id = $id
            ";
            $res = mysqli_query($conn, $sql);
            if ($res == true) {
                $_SESSION['update'] = '<div class="success text-center">Update Successful</div>';
                header("Location: ../faculty.php");
                exit();
            } else {
                $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                header("Location: ../update.faculty.php?id=$id");
            }
            
        }
        
    }
    else{
        header("Location: ../update.faculty.php");
        exit();
    }