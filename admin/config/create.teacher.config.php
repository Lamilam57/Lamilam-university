<?php

if (isset($_POST['submit'])) {
    
    require_once '../../config/conn.config.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $f_code = mysqli_real_escape_string($conn, $_POST['f_code']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $d_code = mysqli_real_escape_string($conn, $_POST['d_code']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    

    if (empty($first) || empty($last) || empty($age)|| empty($designation) || empty($gender) || empty($address)) {
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../create.teacher.php");
        exit();
    } /*else if (strlen($age) <= 3) {
        $_SESSION['age'] = '<div class="error text-center">Incorrect Age.</div>';
        header("Location: ../create.teacher.php");
        exit();
    }*/
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

                    $image = "teacher".$d_code.rand(10, 99).".".$fileActualExt;
                    $fileDestination='../../img/uploads/'.$image;
                    $check = move_uploaded_file($image_tmp_name, $fileDestination);

                    if ($check != true) {
                        $_SESSION['check'] = '<div class="error text-center">Image unable to Upload</div>';
                        header("Location: ../create.teacher.php");
                        exit();
                    } else {
                        $code = $d_code . rand(10, 99);
                        
                        $sql = "INSERT INTO teacher SET
                            first = '$first',
                            last = '$last',
                            t_code = '$code',
                            age = '$age', 
                            image = '$image',
                            designation = '$designation',
                            email = '$email',
                            f_code = '$f_code',
                            d_code = '$d_code',
                            gender = '$gender',
                            dean = 'No',
                            hod = 'No',
                            address = '$address'
                        ";
                        $res = mysqli_query($conn, $sql);
                        
                        if ($res == true) {
                            $_SESSION['create'] = '<div class="success text-center">Faculty Created Sucessfully</div>';
                            header("Location: ../teacher.php");
                            exit();
                        } else {
                            $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                            header("Location: ../create.teacher.php");
                            exit();
                        }
                    }
                    
                    
                } else {
                    $_SESSION['big'] = '<div class="error text-center">Your file is too big</div>';
                    header("Location: ../create.teacher.php");
                    exit();
                }
                
            } else {
                $_SESSION['error'] = '<div class="error text-center">There was an error uploading this file</div>';
                header("Location: ../create.teacher.php");
                exit();
            }
            
        }
        else {
            $_SESSION['type'] = '<div class="error text-center">You cannot upload this kind of file</div>';
            header("Location: ../create.teacher.php");
            exit();
        }   
        
    }
} else {
    header("Location: ../create.teacher.php");
    exit();
}
