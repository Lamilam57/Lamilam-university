<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Courses</h2>
		<br>
		<div class="text-center">
			<a href="create.course.php" class="hero-btn">Create Course</a>
			<a href="multiple.course.php" class="hero-btn">Multiple Course</a>			
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

					if (isset($_SESSION['insert'])) {
                        echo $_SESSION['insert'];
                        unset($_SESSION['insert']);
                    }

					if (isset($_SESSION['delete'])) {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    

                ?>
			<table class="link">
				
				<?php
					$sql = "SELECT * FROM course";
					$res = mysqli_query($conn, $sql);
					$count = mysqli_num_rows($res);

					$SN = 1;

					if ($res == true) {
				?>
					
				<tr>
					<th>S.N</th>
					<th>Course Name</th>
					<th>Course Code</th>
					<th>Action</th>
				</tr>

				<?php
						
						if ($count > 0) {
							while ($row = mysqli_fetch_assoc($res)) {
								$id = $row['id'];
								$name = $row['name'];
								$code = $row['code'];
                                
					
				?>
			
					<tr>
						<td><?php echo $SN++; ?>.</td>
						<td><?php echo $name; ?></td>
						<td><?php echo $code; ?></td>
						<td>
							<a href="update.course.php?id=<?php echo $id; ?>" class="hero-btn">Update Course</a>
							<a href="delete.course.php?id=<?php echo $id; ?>" class="hero-btn">Delete Course</a>
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