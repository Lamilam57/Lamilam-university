<?php

if (isset($_POST['submit'])) {
    require_once '../../../config/conn.config.php';

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);
    $matric_no = mysqli_real_escape_string($conn, $_POST['matric_no']);
    $d_title = mysqli_real_escape_string($conn, $_POST['d_title']);
    $session = mysqli_real_escape_string($conn, $_POST['session']);
    $semester = $_GET['semester'];
    if (empty(isset($_POST['code']))) {
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../course_registration_1.php?id=$id&semester=$semester");
        exit();
    } else {
        foreach ($_POST['code'] as $key => $value) {
            $code = $_POST['code'][$key];
            $unit = $_POST['unit'][$key];
            $semester = $_GET['semester'];
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            $level = mysqli_real_escape_string($conn, $_POST['level']);
            $matric_no = mysqli_real_escape_string($conn, $_POST['matric_no']);
            $d_title = mysqli_real_escape_string($conn, $_POST['d_title']);
            $session = mysqli_real_escape_string($conn, $_POST['session']);

        /* echo $code;
            echo "<br>";
            echo $unit;
            echo "<br>";
            echo $semester;
            echo "<br>";
            echo $level;
            echo "<br>";
            echo $matric_no;
            echo "<br>";
            echo $d_title;
            echo "<br>";
            echo $session;
            echo "<br>"; */
            

            if (empty($level) || empty($matric_no) || empty($value)  || empty($d_title) || empty($session)) {
                $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
                header("Location: ../course_registration_1.php?id=$id&semester=$semester");
                exit();
            }
            else {
                $query = "SELECT * FROM student_course_registration 
                    WHERE semester = $semester AND matric_no = '$matric_no' 
                    AND level = '$level' AND session = '$session'
                ";
                $select = mysqli_query($conn, $query);
                if ($select == true) {
                    $row = mysqli_fetch_assoc($select);
                    $check_code = $row['course_code'];
                    if ($check_code == $code) {
                        $_SESSION['course'] = '<div class="error text-center">Course Registered</div>';
                        header("Location: ../course_registration_1.php?id=$id&semester=$semester");
                        exit();
                    } else {
                        $sql = "INSERT INTO student_course_registration SET
                            matric_no = '$matric_no',
                            semester = $semester,
                            d_title = '$d_title',
                            level = '$level',
                            session = '$session',
                            course_code = '$code',
                            unit = '$unit'
                        ";
                        $res = mysqli_query($conn, $sql);    
                    }
                }
            }       
        }
        if ($res == true) {
            $_SESSION['course'] = '<div class="success text-center">Course Registration Successful</div>';
            header("Location: ../../index.php?id=$id");
            exit();
        } else {
            $_SESSION['sql'] = '<div class="error text-center">SQL Error11111111</div>';
            header("Location: ../course_registration_1.php?id=$id&semester=$semester");
            exit();
        }
    }
} else {
    header("Location: ../course_registration.php?id=$id");
    exit();
}
