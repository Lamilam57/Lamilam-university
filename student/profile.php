
<?php
	include_once '../config/conn.config.php';
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
						<h2 style="margin-top: 20px;">Profile</h2>
					</div>
				</div>
				<div class="menu fix">
					<div class="dateshow fix"><p style="margin-top: 20px;"><?php echo date("Y-m-d")?></p></div>
				</div>
			</div>
		</header>
	
		<div class="loginform fix" style="margin: 70px auto;">
			<div class="msg "><h3> Create Profile</h3></div>
				<div class="access">
					<form action="config/profile.config.php" method="post">
						<?php
							if (isset($_SESSION['sql'])) {
								echo $_SESSION['sql'];
								unset($_SESSION['sql']);
							}

							if (isset($_SESSION['password'])) {
								echo $_SESSION['password'];
								unset($_SESSION['password']);
							}

							if (isset($_SESSION['fields'])) {
								echo $_SESSION['fields'];
								unset($_SESSION['fields']);
							}

							if (isset($_SESSION['email'])) {
								echo $_SESSION['email'];
								unset($_SESSION['email']);
							}

							if (isset($_SESSION['username'])) {
								echo $_SESSION['username'];
								unset($_SESSION['username']);
							}

							if (isset($_SESSION['no-login-message'])) {
								echo $_SESSION['no-login-message'];
								unset($_SESSION['no-login-message']);
							}
						?>
                        <input type="text" name="first" placeholder="First Name">
						<input type="text" name="last" placeholder="Last Name" />
						<input type="text" name="username" placeholder="Username" />
						<input type="email" name="email" placeholder="Email" />
						<input type="password" name="password" placeholder="Enter Password" />
						<input type="password" name="confirm_password" placeholder="Confirm Password" />
						<input type="submit" name="submit" value="Submit" />
						<p>Already Created an Account <a href="login.php">Here</a></p>
					</form>
				</div>
			</div>					
		</div>

    </body>
</html>
		