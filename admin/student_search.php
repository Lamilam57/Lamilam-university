<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Student</h2>
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
		<div class="text-center">
			<form action="student_search" method="post">
				<input type="search" name="search" placeholder="Search for Student" class="hero-btn">
				<input type="submit" name="submit" value="submit" class="hero-btn">
			</form>
				
		</div>
		
		<div>
			<table class="link">
				<tr>
					<th>S.N</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Matric Number</th>
					<th>Level</th>
                    <th>Image</th>
                    <th>Faculty</th>
                    <th>Department</th>
                    <th>E-mail</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Action</th>
				</tr>
				<?php
                    $search = mysqli_real_escape_string($conn, $_POST['search']);

					$sql = "SELECT * FROM student_registration WHERE first LIKE '%$search%' OR last LIKE '%$search%'";

					$res = mysqli_query($conn, $sql);
					$count = mysqli_num_rows($res);

					$SN = 1;

					if ($res == true) {
						
						if ($count > 0) {
							while ($row = mysqli_fetch_assoc($res)) {
								$id = $row['id'];
								$first = $row['first'];
								$last = $row['last'];
								$level = $row['level'];
								$f_code = $row['f_code'];
								$d_code = $row['d_code'];
								$image = $row['image'];
								$email = $row['email'];
								$matric_no = $row['matric_no'];
								$gender = $row['gender'];
								$address = $row['address'];
					
					
				?>

					<tr>
						<td><?php echo $SN++; ?>.</td>
						<td><?php echo $first; ?></td>
                        <td><?php echo $last; ?></td>
                        <td><?php echo $matric_no; ?></td>
						<td><?php echo $level; ?></td>
						<td>
							<?php 
								if ($image == "") {
									echo '<div class="error text-center">No Image Found</div>';
								} else {
							?>
								<div><img src="../img/student/<?php echo $image; ?>" alt="<?php echo $image; ?>" style ="width: 50px; height: 50px"></div>
							<?php
								}						 
							?>
						</td>
						>
						<td><?php echo $f_code; ?></td>
                        <td><?php echo $d_code; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $gender; ?></td>
						<td><?php echo $address; ?></td>
						<td>
							<a href="student_payment.php?id=<?php echo $id; ?>" class="hero-btn">Payment Status</a>
							<a href="delete.student.php?id=<?php echo $id; ?>&image=<?php echo $image; ?>" class="hero-btn">Delete Student</a>
						</td>
					</tr>
				
				<?php
							} 
						} else {
							'<div class="error text-center">No Student Found</div>';
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