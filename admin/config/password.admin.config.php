<?php

if (isset($_POST['submit'])) {
    require_once '../../config/conn.config.php';

    $id = $_POST['id'];
    
    $current_password = mysqli_real_escape_string($conn, $_POST['current_password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    $select = "SELECT * FROM admin WHERE id = $id";
    $query = mysqli_query($conn, $select);
    $rep = mysqli_fetch_assoc($query);
    $demo = $rep['password'];

    $count = password_verify($current_password, $demo);

    if ($count == 1) {
        if ($new_password === $confirm_password) {
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    
            $sql = "UPDATE admin SET
                password = '$hashed_password'
                WHERE id = $id
            ";
            $res = mysqli_query($conn, $sql);
            if ($res == true) {
                $_SESSION['password'] = '<div class="success text-center">Password Change Successful</div>';
                header("Location: ../user.php");
                exit();
            } else {
                $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                header("Location: ../password.admin.php?id=$id");
                exit();
            }
            

        } else {
            $_SESSION['match'] = '<div class="error text-center">Password Does Not Match</div>';
            header("Location: ../password.admin.php?id=$id");
            exit();
        }
        
    } else {
        $_SESSION['invalid'] = '<div class="error text-center">Invalid Password</div>';
        header("Location: ../password.admin.php?id=$id");
        exit();
    }
    
} else {
    header("Location: ../password.admin.php");
    exit();
}
