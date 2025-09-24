<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Result</h2>
		<br>
		<div class="text-center">
				<a href="upload.results.php" class="hero-btn">Upload Results</a>
			</div>
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

                    

                ?>
			<br><br>
			<div class="text-center">
				<a href="index.php" class="hero-btn">Back</a>
			</div>
		</div>
		
		
	</div>
    
<?php
	include_once 'partials/footer.php';
?>