<?php
	require_once 'partials/menu.php';
?>
	
		<div class="loginform fix" style="margin: 70px 500px;">
			<div class="msg "><h3> Teacher's login</h3></div>
				<div class="access">
					<form action="config/login.config.php" method="post">
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

							if (isset($_SESSION['username'])) {
								echo $_SESSION['username'];
								unset($_SESSION['username']);
							}

							if (isset($_SESSION['no-login-message'])) {
								echo $_SESSION['no-login-message'];
								unset($_SESSION['no-login-message']);
							}
						?>
						<input type="text" name="username" placeholder="Username" />
						<input type="password" name="password" placeholder="Password" />
						<input type="submit" name="submit" value="Login" />
						<p>Create an Account <a href="registration.php">Here</a></p>
					</form>
				</div>
			</div>					
		</div>

    </body>
</html>
		