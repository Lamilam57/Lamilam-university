<?php

if (isset($_POST['submit'])) {
    require_once '../../../config/conn.config.php';
    $new_id = mysqli_real_escape_string($conn, $_POST['new_id']);
    $lga = mysqli_real_escape_string($conn, $_POST['lga']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $nation = mysqli_real_escape_string($conn, $_POST['nation']);

    

    if (empty($lga) || empty($state) || empty($nation)){
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../origin.php?new_id=$new_id");
        exit();
    }
    else {

        $sql = "UPDATE student_registration SET
            lga ='$lga',
            state = '$state',
            nation = '$nation'
            WHERE new_id = $new_id
        ";
        $res = mysqli_query($conn, $sql);
        
        if ($res == true) {
            $_SESSION['success'] = '<div class="success text-center">Pls fill this next form</div>';
            header("Location: ../parent_nok.php?new_id=$new_id");
            exit();
        } else {
            $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
            header("Location: ../origin.php?new_id=$new_id");
            exit();
        }
    }
}
else {
    header("Location: ../origin.php");
    exit();
}