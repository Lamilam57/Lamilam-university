<?php
	require_once '../config/conn.config.php';
	require_once 'passwordcheck.config.php';

	$id =$_GET['id'];
?>

<!Doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Login</title>
        <meta name="description" content="University Management system">
		<meta name="author" content="Olamide Ola">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/normalize.css">
		
    </head>
	
    <body>
        <header class="container header_area fix" style="background-color: rgb(9, 134, 124);">
			<div style="background-color: rgb(9, 134, 124);">
				<div class="head">
					<a href="#"><div class="logo fix"></div></a>
					<div style="color: white;margin-left: 20px">
						<h2 style="margin-top: 20px;">Student Portal</h2>
					</div>
				</div>
				<div class="menu fix">
					<div class="dateshow fix"><p style="margin-top: 20px;"><?php echo date("Y-m-d")?></p></div>
				</div>
			</div>
		</header>
	
		<div class="maincontent container fix">
			<div id="stickerside" style="background-color: skyblue">
				<div class="sidebar fix" style="background-color: rgb(9, 134, 124);">
						<ul style="margin-right: 20px;">							
							<li><span class="spcl"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Student Area</span></li>
								<ul>
									<li><a href="login.php"> Login</a></li>
									<li><a href="index.php?id=<?php echo $id?>"> Home</a></li>
									<li><a href="registration/index.php?id=<?php echo $id?>"> Registration</a></li>
									<?php
										$query = "SELECT status FROM student_payment WHERE new_id = $id";
										$select = mysqli_query($conn, $query);
										$fetch = mysqli_fetch_assoc($select);
										$status = $fetch['status'];

										if ($status === 'Paid') {
											$query2 = "SELECT new_id FROM student_payment WHERE new_id = $id";
											$select2 = mysqli_query($conn, $query2);
											$fetch2 = mysqli_fetch_assoc($select2);
											$new_id = $fetch2['new_id'];
									?>
									<div class="dropdown">
										<button class="dropdownBtn" onclick="dropdown()">Course Registration</button>
										<div class="dropdownContent hide">
											<li><a href="registration/course_registration_1.php?id=<?php echo $new_id?>&semester=1">First Semester</a></li>
											<li><a href="registration/course_registration_2.php?id=<?php echo $new_id?>&semester=2">Second Semester</a></li>
											
										</div>
									</div>     
											<li>
									
									
									<?php		
										}
									?>
									<li><a href="logout.php?id=<?php echo $id?>"> Logout</a></li>
								</ul>
							
								<script src="partials/script.js"></script>
						</ul>
					
					</div>
				</div>