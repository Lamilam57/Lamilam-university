<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">User</h2>
		<br>
		<?php
			if (isset($_SESSION['create'])){
				echo $_SESSION['create'];
				unset ($_SESSION['create']);
			}
			if (isset($_SESSION['sql'])) {
				echo $_SESSION['sql'];
				unset ($_SESSION['sql']);
			}
			if (isset($_SESSION['update'])) {
				echo $_SESSION['update'];
				unset ($_SESSION['update']);
			}
			if (isset($_SESSION['password'])) {
				echo $_SESSION['password'];
				unset ($_SESSION['password']);
			}

			if (isset($_SESSION['delete'])) {
				echo $_SESSION['delete'];
				unset ($_SESSION['delete']);
			}

			if (isset($_SESSION['error'])) {
				echo $_SESSION['error'];
				unset ($_SESSION['error']);
			}
		?>

		<div class="text-center">
			<a href="create.admin.php" class="hero-btn">Create Account</a>			
		</div>
			
		<br>
		<div>
			<table class="link">
				<tr>
					<th>S.N</th>
					<th>Full Name</th>
					<th>Username</th>
					<th>Action</th>
				</tr>

				<?php
					$sql = "SELECT * FROM admin";
					$res = mysqli_query($conn, $sql);
					$count = mysqli_num_rows($res);

					$SN = 1;

					if ($count > 0) {
						while ($row = mysqli_fetch_assoc($res)) {
							$id = $row['id'];
							$full_name = $row['full_name'];
							$username = $row['username'];
				?>
				<tr>
					<td><?php echo $SN++; ?>.</td>
					<td><?php echo $full_name; ?></td>
					<td><?php echo $username; ?></td>
					<td>
						<a href="update.admin.php?id=<?php echo $id; ?>" class="hero-btn">Update Account</a>
						<a href="password.admin.php?id=<?php echo $id; ?>" class="hero-btn">Change Password</a>
						<a href="delete.admin.php?id=<?php echo $id; ?>" class="hero-btn">Delete Account</a>
					</td>
				</tr>

				<?php
						} 
					} else {
						'<div class="error text-center">No Faculty Uploaded</div>';
					}
				
					
				?>
			
		<div class="text-center">
				<a href="index.php" class="hero-btn">Back</a>
			</div>
		</div>
		
		
	</div>
    
<?php
	include_once 'partials/footer.php';
?>