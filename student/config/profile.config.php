<?php

if (isset($_POST['submit'])) {
    require_once '../../config/conn.config.php';
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $insert_password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    
    if (empty($last) || empty($first) || empty($username) || empty($email) || empty($insert_password) || empty($confirm_password)){
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../profile.php");
        exit();
    }
    else if ($insert_password != $confirm_password){
        $_SESSION['password'] = '<div class="error text-center">Password does not match</div>';
        header("Location: ../profile.php");
        exit();
    }
    else {
        $select = "SELECT * FROM student";
        $check = mysqli_query($conn, $select);
        $count = mysqli_num_rows($check);
    
        $check_row = mysqli_fetch_assoc($check);
        $confirm_email = $check_row['email'];
        $confirm_username = $check_row['username'];
        if ($confirm_email == $email) {
            $_SESSION['email'] = '<div class="error text-center">Email already Used. </div>';
            header("Location: ../profile.php");
            exit();
        }
        else if ($confirm_username == $username) {
            $_SESSION['username'] = '<div class="error text-center">Username already Used. </div>';
            header("Location: ../profile.php");
            exit();
        } 
        else {
            $password = password_hash($insert_password, PASSWORD_DEFAULT);
            $sql = " INSERT INTO student SET
                first = '$first',
                last = '$last',
                email = '$email',
                username = '$username',
                password ='$password'
            ";
            $res = mysqli_query($conn, $sql);
            if ($res == true) {
                $query = "SELECT id FROM student WHERE first = '$first' AND email = '$email'";
                $check= mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($check);
                $id = $row['id'];

                $sql2 = " INSERT INTO student_payment SET
                    first = '$first',
                    last = '$last',
                    new_id = $id
                ";
                $res2 = mysqli_query($conn, $sql2);
                if ($res2 == true) {
                    $_SESSION['success'] = '<div class="success text-center">Registration Successful.<br> You can now login</div>';
                    header("Location: ../login.php");
                    exit();
                }
                else {
                    $_SESSION['sql'] = '<div class="error text-center">SQL Error6t4736573563782</div>';
                    header("Location: ../profile.php");
                    exit();
                }
            } 
            else {
                $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                header("Location: ../profile.php");
                exit();
            }
            
        }
    }
    
} else {
    header("Location: ../login.php");
    exit();
}

