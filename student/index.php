<?php
	include_once 'partials/menu.php';
?>

<?php
	if (isset($_SESSION['login'])) {
		echo $_SESSION['login'];
		unset($_SESSION['login']);
	}

	if (isset($_SESSION['course'])) {
		echo $_SESSION['course'];
		unset($_SESSION['course']);
	}
?>

<div class="content fix">
		<div class="link">
			<a href="index.php" class="hero-btn">Home</a>
		</div>
			
		
		
	</div>

<?php
	include_once 'partials/footer.php';
?>