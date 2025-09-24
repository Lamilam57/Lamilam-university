<?php

if (isset($_POST['submit'])) {

    require_once '../../../config/conn.config.php';
    $new_id = mysqli_real_escape_string($conn, $_POST['new_id']);

    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $reg_number = mysqli_real_escape_string($conn, $_POST['reg_number']);

    $subject_1 = mysqli_real_escape_string($conn, $_POST['subject_1']);
    $result_1 = mysqli_real_escape_string($conn, $_POST['result_1']);
    $subject_2 = mysqli_real_escape_string($conn, $_POST['subject_2']);
    $result_2 = mysqli_real_escape_string($conn, $_POST['result_2']);
    $subject_3 = mysqli_real_escape_string($conn, $_POST['subject_3']);
    $result_3 = mysqli_real_escape_string($conn, $_POST['result_3']);
    $subject_4 = mysqli_real_escape_string($conn, $_POST['subject_4']);
    $result_4 = mysqli_real_escape_string($conn, $_POST['result_4']);
    $subject_5 = mysqli_real_escape_string($conn, $_POST['subject_5']);
    $result_5 = mysqli_real_escape_string($conn, $_POST['result_5']);
    $subject_6 = mysqli_real_escape_string($conn, $_POST['subject_6']);
    $result_6 = mysqli_real_escape_string($conn, $_POST['result_6']);
    $subject_7 = mysqli_real_escape_string($conn, $_POST['subject_7']);
    $result_7 = mysqli_real_escape_string($conn, $_POST['result_7']);
    $subject_8 = mysqli_real_escape_string($conn, $_POST['subject_8']);
    $result_8 = mysqli_real_escape_string($conn, $_POST['result_8']);
    $subject_9 = mysqli_real_escape_string($conn, $_POST['subject_9']);
    $result_9 = mysqli_real_escape_string($conn, $_POST['result_9']);
    
    $query = "SELECT id FROM student WHERE id = $new_id";
    $select = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($select);
    $id = $fetch['id'];

    if (empty($year) || empty($type) || empty($reg_number) || empty($subject_1) || empty($result_1) || empty($subject_2) || empty($result_2)
    || empty($subject_3) || empty($result_3) || empty($subject_4) || empty($result_4) || empty($subject_5) || empty($result_5)
    || empty($subject_6) || empty($result_6) || empty($subject_7) || empty($result_7) || empty($subject_8) || empty($result_8)
    || empty($subject_9) || empty($result_9)){
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../waec_result.php?new_id=$new_id");
        exit();
    }
    else {
        $sql = "UPDATE student_registration SET
            reg_number = '$reg_number'
            WHERE new_id = $new_id 
        ";
        $res = mysqli_query($conn, $sql);
        
        if ($res == true) {
            $sql2 = "UPDATE student_parent_nok SET
                reg_number = '$reg_number'
                WHERE new_id = $new_id 
            ";
            $res2 = mysqli_query($conn, $sql2);
            
            if ($res2 == true) {
                $sql3 = "INSERT INTO student_waec_result SET
                    matric_no = '',
                    year = '$year',
                    type ='$type',
                    reg_number ='$reg_number',
                    subject_1 = '$subject_1',
                    result_1 = '$result_1',
                    subject_2 = '$subject_2',
                    result_2 = '$result_2',
                    subject_3 = '$subject_3',
                    result_3 = '$result_3',
                    subject_4 = '$subject_4',
                    result_4 = '$result_4',
                    subject_5 = '$subject_5',
                    result_5 = '$result_5',
                    subject_6 = '$subject_6',
                    result_6 = '$result_6',
                    subject_7 = '$subject_7',
                    result_7 = '$result_7',
                    subject_8 = '$subject_8',
                    result_8 = '$result_8',
                    subject_9 = '$subject_1',
                    result_9 = '$result_9',
                    new_id = $new_id
                ";
                $res3 = mysqli_query($conn, $sql3);
                
                if ($res3 == true) {
                    $_SESSION['registration'] = '<div class="success text-center">Registration completed successfully</div>';
                    header("Location: ../../index.php?id=$id");
                    exit();
                } else {
                    $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                    header("Location: ../waec_result.php?new_id=$new_id");
                    exit();
                }
            } else {
                $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                header("Location: ../waec_result.php?new_id=$new_id");
                exit();
            }
            
        } else {
            $_SESSION['sql'] = '<div class="error text-center">SQL Error366636</div>';
            header("Location: ../waec_result.php?new_id=$new_id");
            exit();
        }
        
    }
}
else {
    header("Location: ../waec_result.php");
    exit();
}
    