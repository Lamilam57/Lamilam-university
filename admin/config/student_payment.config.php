<?php

if (isset($_POST['submit'])) {

    require_once '../../config/conn.config.php';
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $new_id = mysqli_real_escape_string($conn, $_POST['new_id']);

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $d_name = mysqli_real_escape_string($conn, $_POST['d_name']);
    $d_code = mysqli_real_escape_string($conn, $_POST['d_code']);
    $paid = mysqli_real_escape_string($conn, $_POST['paid']);
    $receipt = mysqli_real_escape_string($conn, $_POST['receipt']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    if (empty($first) || empty($last) || empty($f_name) || empty($d_name) || empty($paid) || empty($receipt) || empty($type) || empty($status)) {
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../student_payment.php?id=$id&new_id=$new_id");
        exit();
    } else {
        $sq = 01;
        $matric_no = date("y"). "/" . "$d_code" . rand(000, 200);
        $date = date("Y-m-d");
        $transaction_id = "Payment-" . rand(000, 200);

        $sql = "UPDATE student_registration SET
            matric_no = '$matric_no'
            WHERE new_id = $new_id
        ";
        $res = mysqli_query($conn, $sql);
        
        if ($res == true) {
            $sql2 = "UPDATE student_parent_nok SET
                matric_no = '$matric_no'
                WHERE new_id = $new_id
            ";
            $res2 = mysqli_query($conn, $sql2);

            if ($res2 == true) {
                $sql3 = "UPDATE student_waec_result SET
                    matric_no = '$matric_no'
                    WHERE new_id = $new_id
                ";
                $res3 = mysqli_query($conn, $sql3);

                if ($res3 == true) {
                    $sql4 = "UPDATE student_payment SET
                        transaction_id = '$transaction_id',
                        matric_no = '$matric_no',
                        f_name = '$f_name',
                        d_name = '$d_name',
                        paid = '$paid',
                        receipt = '$receipt',
                        type = '$type',
                        status = '$status',
                        date = '$date'
                        WHERE new_id = $new_id
                    ";  
                    $res4 = mysqli_query($conn, $sql4);
                    
                    if ($res4 == true) {
                        $_SESSION['registration'] = '<div class="success text-center">Registration completed successfully</div>';
                        header("Location: ../student.php");
                        exit();
                    } else {
                        $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                        header("Location: ../student_payment.php?id=$id&new_id=$new_id");
                        exit();
                    }
                } else {
                    $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                    header("Location: ../student_payment.php?id=$id&new_id=$new_id");
                    exit();
                }
            } else {
                $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                header("Location: ../student_payment.php?id=$id&new_id=$new_id");
                exit();
            }
            
        } else {
            $_SESSION['sql'] = '<div class="error text-center">SQL Error366636</div>';
            header("Location: ../student_payment.php?id=$id&new_id=$new_id");
            exit();
        }
    }
} else {
    header("Location: ../student_payment.php");
    exit();
}
