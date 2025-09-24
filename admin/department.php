<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Department</h2>
		<br>
		<div class="text-center">
			<a href="create.department.php" class="hero-btn">Create Department</a>
			<a href="multiple.department.php" class="hero-btn">Multiple Department</a>			
		</div>
			
		<br>
		<div>
				<?php
                    if (isset($_SESSION['create'])) {
                        echo $_SESSION['create'];
                        unset($_SESSION['create']);
                    }

					if (isset($_SESSION['update'])) {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

					if (isset($_SESSION['delete'])) {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if (isset($_SESSION['insert'])) {
                        echo $_SESSION['insert'];
                        unset($_SESSION['insert']);
                    }

                ?>
			<table class="link">
				
				<?php
					$sql = "SELECT * FROM department";
					$res = mysqli_query($conn, $sql);
					$count = mysqli_num_rows($res);

					$SN = 1;

					if ($res == true) {
				?>
					
				<tr>
					<th>S.N</th>
					<th>Departmental Name</th>
					<th>Departmental Code</th>
					<th>Departmental Program</th>
					<th>Head of Department</th>
                    <th>Faculty Code</th>
                    <th>Action</th>
				</tr>

				<?php
						
						if ($count > 0) {
							while ($row = mysqli_fetch_assoc($res)) {
								$id = $row['id'];
								$name = $row['name'];
								$code = $row['code'];
								$program = $row['program'];
								$hod = $row['hod'];
								$f_code = $row['f_code'];
					
					
				?>
			
					<tr>
						<td><?php echo $SN++; ?>.</td>
						<td><?php echo $name; ?></td>
						<td><?php echo $code; ?></td>
						<td><?php echo $program; ?></td>
						<td><?php echo $hod; ?></td>
						<td><?php echo $f_code; ?></td>
						<td>
							<a href="update.department.php?id=<?php echo $id; ?>" class="hero-btn">Update Department</a>
							<a href="delete.department.php?id=<?php echo $id; ?>" class="hero-btn">Delete Department</a>
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