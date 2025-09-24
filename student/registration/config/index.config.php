<?php

if (isset($_POST['submit'])) {
    require_once '../../../config/conn.config.php';
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $religion = mysqli_real_escape_string($conn, $_POST['religion']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $f_code = mysqli_real_escape_string($conn, $_POST['f_code']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $d_code = mysqli_real_escape_string($conn, $_POST['d_code']);
    $program = mysqli_real_escape_string($conn, $_POST['program']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    

    if (empty($first) || empty($last) || empty($dob) || empty($religion) || empty($f_code) || empty($number) || empty($email) || empty($status) || empty($d_code) || empty($program) || empty($gender) || empty($address)) {
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../index.php?id=$id");
        exit();
    }
    else if (!preg_match("/^[0-9]*$/", $number)) {
        $_SESSION['number'] = '<div class="error text-center">Invalid Phone Number</div>';
        header("Location: ../index.php?id=$id");
        exit();
    }
    else {

        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_error = $_FILES['image'] ['error'];
        $image_size = $_FILES['image'] ['size'];
        $image_type = $_FILES['image'] ['type'];
        
        $ext = explode('.', $image_name);
        $fileActualExt= strtolower(end($ext));
        $allow = array('jpg', 'jpeg','png');
        
        if (in_array($fileActualExt, $allow)) {
            if ($image_error === 0) {
                if ($image_size < 5*1024*1024) {

                    $image = "Student".$first.rand(00010, 99999).".".$fileActualExt;
                    $fileDestination='../../../img/student/'.$image;
                    $check = move_uploaded_file($image_tmp_name, $fileDestination);

                    if ($check != true) {
                        $_SESSION['check'] = '<div class="error text-center">Image unable to Upload</div>';
                        header("Location: ../index.php?id=$id");
                        exit();
                    } else {
                        $sql = "INSERT INTO student_registration SET
                            first = '$first',
                            last = '$last',
                            matric_no = '',
                            reg_number ='',
                            level = '$level',
                            dob = '$dob', 
                            image = '$image',
                            program = '$program',
                            religion = '$religion',
                            email = '$email',
                            f_code = '$f_code',
                            d_code = '$d_code',
                            gender = '$gender',
                            status = '$status',
                            phone = '$number',
                            address = '$address',
                            new_id= $id,
                            lga = '',
                            state = '',
                            nation = ''
                        ";
                        $res = mysqli_query($conn, $sql);
                        
                        if ($res == true) {
                            $_SESSION['success'] = '<div class="success text-center">Pls fill this next form</div>';
                            header("Location: ../origin.php?new_id=$id");
                            exit();
                        } else {
                            $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                            header("Location: ../index.php?id=$id");
                            exit();
                        }
                    }
                    
                    
                } else {
                    $_SESSION['big'] = '<div class="error text-center">Your file is too big</div>';
                    header("Location: ../index.php?id=$id");
                    exit();
                }
                
            } else {
                $_SESSION['error'] = '<div class="error text-center">There was an error uploading this file</div>';
                header("Location: ../index.php?id=$id");
                exit();
            }
            
        }
        else {
            $_SESSION['type'] = '<div class="error text-center">You cannot upload this kind of file</div>';
            header("Location: ../index.php?id=$id");
            exit();
        }   
        
    }
} else {
    header("Location: ../index.php?id=$id");
    exit();
}



