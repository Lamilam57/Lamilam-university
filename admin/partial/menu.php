<?php
	require_once '../config/conn.config.php';
	require_once 'passwordcheck.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="University Management system">
	<meta name="author" content="Olamide Ola">
	<link rel="stylesheet" href="../css/admin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMINISTRATOR'S PORTAL</title>
</head>
<body>
	<header>
		<div class="text-center">
			<h1>Administrator's   Portal</h1>
		</div>
		<div class="menu fix">
			<div class="dateshow fix"><p style="color: #fff; text-align: right; margin: 0; 
			margin-right: 20px; padding: 0; font-size: 14px; font-style: italic;">
			<?php echo date("Y-m-d")?></p></div>
		</div>
	</header>
