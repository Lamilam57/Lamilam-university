<?php

    if (isset($_POST['submit'])) {
        require_once '../../config/conn.config.php';

        $id = $_POST['id'];

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $hod = mysqli_real_escape_string($conn, $_POST['hod']);
        $program = mysqli_real_escape_string($conn, $_POST['program']);
        $f_code = mysqli_real_escape_string($conn, $_POST['f_code']);


        if (empty($name) || empty($hod) || empty($program) || empty($f_code)) {
            $_SESSION['fields'] = '<div class="error text-center">Fill all Fields</div>';
            header("Location: ../update.department.php?id=$id");
        } else {
            $sql = "UPDATE department SET
                name = '$name',
                hod = '$hod',
                program = '$program',
                f_code = '$f_code'
                WHERE id = $id
            ";
            $res = mysqli_query($conn, $sql);
            if ($res == true) {
                $_SESSION['update'] = '<div class="success text-center">Update Successful</div>';
                header("Location: ../department.php");
                exit();
            } else {
                $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                header("Location: ../update.department.php?id=$id");
            }
            
        }
        
    }
    else{
        header("Location: ../update.department.php");
        exit();
    }
    