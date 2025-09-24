<?php 

if (!$_SESSION['student-check']) {
    $_SESSION['no-login-message'] = '<div class="error text-center">Pls login to access Admin Portal</div>';
    header("Location: login.php");
    exit();
}