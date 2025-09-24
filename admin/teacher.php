<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Teacher</h2>
		<br>
		<div class="text-center">
			<a href="create.teacher.php" class="hero-btn">Create Teacher</a>			
		</div>
		<?php
			if (isset($_SESSION['create'])) {
                echo $_SESSION['create'];
                unset($_SESSION['create']);
            }
			
			if (isset($_SESSION['delete'])) {
				echo $_SESSION['delete'];
				unset($_SESSION['delete']);
			}

			if (isset($_SESSION['error'])) {
				echo $_SESSION['error'];
				unset($_SESSION['error']);
			}

			if (isset($_SESSION['update'])) {
				echo $_SESSION['update'];
				unset($_SESSION['update']);
			}
		?>
		<br>
		<div>
			<table class="link">
				<tr>
					<th>S.N</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Staff Code</th>
                    <th>Image</th>
                    <th>Designation</th>
                    <th>Faculty</th>
                    <th>Department</th>
                    <th>E-mail</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Action</th>
				</tr>
				<?php
					$sql = "SELECT * FROM teacher";
					$res = mysqli_query($conn, $sql);
					$count = mysqli_num_rows($res);

					$SN = 1;

					if ($res == true) {
						
						if ($count > 0) {
							while ($row = mysqli_fetch_assoc($res)) {
								$id = $row['id'];
								$first = $row['first'];
								$last = $row['last'];
								$code = $row['t_code'];
								$age= $row['age'];
								$f_code = $row['f_code'];
								$d_code = $row['d_code'];
								$image = $row['image'];
								$email = $row['email'];
								$designation = $row['designation'];
								$gender = $row['gender'];
								$address = $row['address'];
					
					
				?>

					<tr>
						<td><?php echo $SN++; ?>.</td>
						<td><?php echo $first; ?></td>
                        <td><?php echo $last; ?></td>
                        <td><?php echo $code; ?></td>
						<td>
							<?php 
								if ($image == "") {
									echo '<div class="error text-center">No Image Found</div>';
								} else {
							?>
								<div><img src="../img/uploads/<?php echo $image; ?>" alt="<?php echo $image; ?>" style ="width: 50px; height: 50px"></div>
							<?php
								}						 
							?>
						</td>
						<td><?php echo $designation; ?></td>
						<td><?php echo $f_code; ?></td>
                        <td><?php echo $d_code; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $gender; ?></td>
						<td><?php echo $address; ?></td>
						<td>
							<a href="update.teacher.php?id=<?php echo $id; ?>&image=<?php echo $image; ?>" class="hero-btn">Update Faculty</a>
							<a href="delete.teacher.php?id=<?php echo $id; ?>&image=<?php echo $image; ?>" class="hero-btn">Delete Faculty</a>
						</td>
					</tr>
				
				<?php
							} 
						} else {
							'<div class="error text-center">No Faculty Uploaded</div>';
						}
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