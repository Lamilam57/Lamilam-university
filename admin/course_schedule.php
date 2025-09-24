<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Courses Schedule</h2>
		<br>
		<div class="text-center">
			<a href="create.course_schedule.php" class="hero-btn">Create Course Schedule</a>
			<a href="multiple.course_schedule.php" class="hero-btn">Multiple Course Schedule</a>			
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
					$sql = "SELECT * FROM course_schedule";
					$res = mysqli_query($conn, $sql);
					$count = mysqli_num_rows($res);

					$SN = 1;

					if ($res == true) {
				?>
					
				<tr>
					<th>S.N</th>
                    <th>Department</th>
                    <th>Level</th>
					<th>Semester</th>
					<th>Course Code</th>
                    <th>Course Unit</th>
					<th>Action</th>
				</tr>

				<?php
						
						if ($count > 0) {
							while ($row = mysqli_fetch_assoc($res)) {
								$id = $row['id'];
                                $department = $row['department'];
                                $level = $row['level'];
								$semester = $row['semester'];
                                $course_code = $row['course_code'];
								$course_unit = $row['course_unit'];
                                
					
				?>
			
					<tr>
						<td><?php echo $SN++; ?>.</td>
                        <td><?php echo $department; ?></td>
						<td><?php echo $level; ?></td>
                        <td><?php echo $semester; ?></td>
						<td><?php echo $course_code; ?></td>
						<td><?php echo $course_unit; ?></td>
						<td>
							<a href="update.course_schedule.php?id=<?php echo $id; ?>" class="hero-btn">Update Course</a>
							<a href="delete.course_schedule.php?id=<?php echo $id; ?>" class="hero-btn">Delete Course</a>
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