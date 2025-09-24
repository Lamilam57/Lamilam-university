<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Faculty</h2>
		<br>
		<div class="text-center">
			<a href="create.faculty.php" class="hero-btn">Create Faculty</a>
			<a href="multiple.faculty.php" class="hero-btn">Insert Multiple Faculty</a>			
		</div>
			
		<br>
		<div>
			<table class="link">
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

					if (isset($_SESSION['insert'])) {
                        echo $_SESSION['insert'];
                        unset($_SESSION['insert']);
                    }
				?>
				<tr>
					<th>S.N</th>
					<th>Faculty Name</th>
					<th>Faculty Code</th>
					<th>Faculty Dean</th>
                    <th>Faculty Location</th>
                    <th>Action</th>
				</tr>

				<?php
					$sql = "SELECT * FROM faculty";
					$res = mysqli_query($conn, $sql);
					$count = mysqli_num_rows($res);

					$SN = 1;

					if ($res == true) {
						
						if ($count > 0) {
							while ($row = mysqli_fetch_assoc($res)) {
								$id = $row['id'];
								$name = $row['name'];
								$code = $row['code'];
								$dean = $row['dean'];
								$address = $row['address'];
					
					
				?>
					<tr>
						<td><?php echo $SN++; ?>.</td>
						<td><?php echo $name; ?></td>
						<td><?php echo $code; ?></td>
						<td><?php echo $dean; ?></td>
						<td><?php echo $address; ?></td>
						<td>
							<a href="update.faculty.php?id=<?php echo $id; ?>" class="hero-btn">Update Faculty</a>
							<a href="delete.faculty.php?id=<?php echo $id; ?>" class="hero-btn">Delete Faculty</a>
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