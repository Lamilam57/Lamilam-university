<?php
	include_once 'partials/menu.php';
?>

<?php
	if (isset($_SESSION['login'])) {
		echo $_SESSION['login'];
		unset($_SESSION['login']);
	}
?>

<div class="wrapper">
		<div class="link">
			<a href="index.php" class="hero-btn">Home</a>
			<a href="user.php" class="hero-btn">User</a>
			<a href="faculty.php" class="hero-btn">Manage Faculty</a>
			<a href="department.php" class="hero-btn">Manage Department</a>
			<a href="course.php" class="hero-btn">Manage Courses</a>
			<a href="course_schedule.php" class="hero-btn">Manage Courses Schedule</a>
			<a href="student.php" class="hero-btn">Manage Student</a>
			<a href="result.php" class="hero-btn">Manage Result</a>
			<a href="teacher.php" class="hero-btn">Manage Teacher</a>
			<a href="logout.php" class="hero-btn">Logout</a>
		</div>
			
		
		
	</div>

<?php
	include_once 'partials/footer.php';
?>