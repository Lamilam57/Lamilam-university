<?php
	include_once '../../config/conn.config.php';
    require_once 'passwordcheck.config.php';


	
?>
<!Doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Login</title>
        <meta name="description" content="University Management system">
		<meta name="author" content="Olamide Ola">
		<link rel="stylesheet" href="../../css/normalize.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		
    </head>
    <body>
        <header class="container header_area fix" style="background-color: rgb(9, 134, 124);">
			<div style="background-color: rgb(9, 134, 124);">
				<div class="head">
					<a href="#"><div class="logo fix"></div></a>
					<div style="color: white;margin-left: 20px">
						<h2 style="margin-top: 20px;">Student Registration</h2>
					</div>
				</div>
				<div class="menu fix">
					<div class="dateshow fix"><p style="margin-top: 20px;"><?php echo date("Y-m-d")?></p></div>
				</div>
			</div>
		</header>
		