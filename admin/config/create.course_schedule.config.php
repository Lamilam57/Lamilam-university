

<?php

if (isset($_POST['submit'])) {

    require_once '../../config/conn.config.php';

    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $course_unit = mysqli_real_escape_string($conn, $_POST['course_unit']);
    $course_code = mysqli_real_escape_string($conn, $_POST['course_code']);
    
    if (empty($course_code) || empty($department) || empty($level) || empty($semester) || empty($course_unit)) {
        $_SESSION['fields'] = '<div class="error text-center">Fill all fields</div>';
        header("Location: ../create.course_schedule.php");
        exit();
    } else {
        $sql = "INSERT INTO course_schedule SET
            department = '$department',
            level = '$level',
            semester = '$semester',
            course_unit = '$course_unit',
            course_code = '$course_code'
        ";
        $res = mysqli_query($conn, $sql);
        
        if ($res == true) {
            $_SESSION['create'] = '<div class="success text-center">Faculty Created Sucessfully</div>';
            header("Location: ../course_schedule.php");
            exit();
        } else {
            $_SESSION['sql'] = '<div class="error text-center">SQL ErrorwqrdFWQAFWQAF</div>';
            header("Location: ../create.course_schedule.php");
            exit();
        }
        
    }
} else {
    header("Location: ../course_schedule.php");
    exit();
}
