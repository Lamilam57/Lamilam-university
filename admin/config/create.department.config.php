<?php

if (isset($_POST['submit'])) {

    require_once '../../config/conn.config.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $hod = mysqli_real_escape_string($conn, $_POST['hod']);
    $program = mysqli_real_escape_string($conn, $_POST['program']);
    $f_code = mysqli_real_escape_string($conn, $_POST['f_code']);

    if (empty($name) || empty($program) || empty($f_code)) {
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../create.department.php");
        exit();
    } else {
        $a_z = "ABCDEFGHJKLMNPQRSTUVWXYZ";
        $letter = substr(str_shuffle($a_z), 0, 2);
        $code = rand(10, 99) . $letter;
        $sql = "INSERT INTO department SET
            name = '$name',
            code = '$code',
            hod = '$hod',
            program = '$program',
            f_code = '$f_code'
        ";
        $res = mysqli_query($conn, $sql);
        
        if ($res == true) {
            $_SESSION['create'] = '<div class="success text-center">Faculty Created Sucessfully</div>';
            header("Location: ../department.php");
            exit();
        } else {
            $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
            header("Location: ../create.department.php");
            exit();
        }
        
    }
} else {
    header("Location: ../create.department.php");
    exit();
}
