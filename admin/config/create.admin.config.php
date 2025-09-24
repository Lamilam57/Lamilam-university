<?php

if (isset($_POST['submit'])) {
    require_once '../../config/conn.config.php';

    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($full_name) || empty($username) || empty($password)) {
        $_SESSION['fields'] =  '<div class="error text-center">Fill all Fields</div>';
        header("Location: ../create.admin.php");
    } else {
        $sql = "SELECT * FROM admin WHERE full_name = '$full_name' OR username = '$username'";
        $res = mysqli_query($conn, $sql);
        $check = mysqli_num_rows($res);

        if ($check == 1) {
            $row = mysqli_fetch_assoc($res);
            $full_name = $row['full_name'];
            $username = $row['username'];

            $_SESSION['user'] =  '<div class="error text-center">User already Taken</div>';
            header("Location: ../create.admin.php");
            exit();
        } else {
            $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
            $sql2 = "INSERT INTO admin SET
                full_name = '$full_name',
                username = '$username',
                password = '$hashed_pwd'
            ";
            $res2 = mysqli_query($conn, $sql2);

                if ($res2 == true) {
                    $_SESSION['create'] =  '<div class="success text-center">Admin Created Successfully</div>';
                    header("Location: ../user.php");
                } else {
                    $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                    header("Location: ../create.admin.php");
                }
        }
        
    }
    mysqli_close($conn);
    
} 
else {
    header("Location: ../create.admin.php");
    exit();
}
