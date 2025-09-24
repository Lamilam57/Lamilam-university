<?php

if (isset($_POST['submit'])) {

    require_once '../../../config/conn.config.php';
    $new_id = mysqli_real_escape_string($conn, $_POST['new_id']);

    $male_first = mysqli_real_escape_string($conn, $_POST['male_first']);
    $male_last = mysqli_real_escape_string($conn, $_POST['male_last']);
    $male_maiden = mysqli_real_escape_string($conn, $_POST['male_maiden']);
    $male_email = mysqli_real_escape_string($conn, $_POST['male_email']);
    $male_number = mysqli_real_escape_string($conn, $_POST['male_number']);
    $male_religion = mysqli_real_escape_string($conn, $_POST['male_religion']);
    $male_occupation = mysqli_real_escape_string($conn, $_POST['male_occupation']);
    $male_address = mysqli_real_escape_string($conn, $_POST['male_address']);
    $male_lga = mysqli_real_escape_string($conn, $_POST['male_lga']);
    $male_state = mysqli_real_escape_string($conn, $_POST['male_state']);
    $male_nation = mysqli_real_escape_string($conn, $_POST['male_nation']);

    $female_first = mysqli_real_escape_string($conn, $_POST['female_first']);
    $female_last = mysqli_real_escape_string($conn, $_POST['female_last']);
    $female_maiden = mysqli_real_escape_string($conn, $_POST['female_maiden']);
    $female_email = mysqli_real_escape_string($conn, $_POST['female_email']);
    $female_number = mysqli_real_escape_string($conn, $_POST['female_number']);
    $female_religion = mysqli_real_escape_string($conn, $_POST['female_religion']);
    $female_occupation = mysqli_real_escape_string($conn, $_POST['female_occupation']);
    $female_address = mysqli_real_escape_string($conn, $_POST['female_address']);
    $female_lga = mysqli_real_escape_string($conn, $_POST['female_lga']);
    $female_state = mysqli_real_escape_string($conn, $_POST['female_state']);
    $female_nation = mysqli_real_escape_string($conn, $_POST['female_nation']);

    $nok_first = mysqli_real_escape_string($conn, $_POST['nok_first']);
    $nok_last = mysqli_real_escape_string($conn, $_POST['nok_last']);
    $nok_maiden = mysqli_real_escape_string($conn, $_POST['nok_maiden']);
    $nok_email = mysqli_real_escape_string($conn, $_POST['nok_email']);
    $nok_number = mysqli_real_escape_string($conn, $_POST['nok_number']);
    $nok_religion = mysqli_real_escape_string($conn, $_POST['nok_religion']);
    $nok_occupation = mysqli_real_escape_string($conn, $_POST['nok_occupation']);
    $nok_address = mysqli_real_escape_string($conn, $_POST['nok_address']);
    $nok_lga = mysqli_real_escape_string($conn, $_POST['nok_lga']);
    $nok_state = mysqli_real_escape_string($conn, $_POST['nok_state']);
    $nok_nation = mysqli_real_escape_string($conn, $_POST['nok_nation']);


    if (empty($male_first) || empty($male_last) || empty($male_maiden) || empty($male_number) || empty($male_email) || empty($male_religion)
     || empty($male_occupation) || empty($male_address) || empty($male_lga) || empty($male_state) || empty($male_nation) ||
     empty($female_first) || empty($female_last) || empty($female_maiden) || empty($female_number) || empty($female_email) || empty($female_religion)
     || empty($female_occupation) || empty($female_address) || empty($female_lga) || empty($female_state) || empty($female_nation) ||
     empty($nok_first) || empty($nok_last) || empty($nok_maiden) || empty($nok_number) || empty($nok_email) || empty($nok_religion)
     || empty($nok_occupation) || empty($nok_address) || empty($nok_lga) || empty($nok_state) || empty($nok_nation)){
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../parent_nok.php?new_id=$new_id");
        exit();
    }
    else if (!preg_match("/^[0-9]*$/", $male_number)|| !preg_match("/^[0-9]*$/", $female_number)|| !preg_match("/^[0-9]*$/", $nok_number)) {
        $_SESSION['number'] = '<div class="error text-center">Invalid Phone Number</div>';
        header("Location: ../index.php?id=$id");
        exit();
    }
    else {

        $sql = "INSERT INTO student_parent_nok SET
            matric_no = '',
            reg_number ='',
            
            male_first = '$male_first',
            male_last ='$male_last',
            male_maiden ='$male_maiden',
            male_email ='$male_email',
            male_number ='$male_number',
            male_religion ='$male_religion',
            male_occupation ='$male_occupation',
            male_address ='$male_address',
            male_lga ='$male_lga',
            male_state = '$male_state',
            male_nation = '$male_nation',
            
            female_first = '$female_first',
            female_last ='$female_last',
            female_maiden ='$female_maiden',
            female_email ='$female_email',
            female_number ='$female_number',
            female_religion ='$female_religion',
            female_occupation ='$female_occupation',
            female_address ='$female_address',
            female_lga ='$male_lga',
            female_state = '$female_state',
            female_nation = '$female_nation',
            
            nok_first = '$nok_first',
            nok_last ='$nok_last',
            nok_maiden ='$nok_maiden',
            nok_email ='$nok_email',
            nok_number ='$nok_number',
            nok_religion ='$nok_religion',
            nok_occupation ='$nok_occupation',
            nok_address ='$nok_address',
            nok_lga ='$nok_lga',
            nok_state = '$nok_state',
            nok_nation = '$nok_nation',
            new_id = $new_id
        ";
        $res = mysqli_query($conn, $sql);
        
        if ($res == true) {
            $_SESSION['success'] = '<div class="success text-center">Pls fill this next form</div>';
            header("Location: ../waec_result.php?new_id=$new_id");
            exit();
        } else {
            $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
            header("Location: ../parent_nok.php?new_id=$new_id");
            exit();
        }
    }
}
else {
    header("Location: ../parent_nok.php");
    exit();
}