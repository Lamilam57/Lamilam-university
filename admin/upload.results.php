<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Upload Results</h2>
        <div class="clearfix"></div>
		<form action="config/upload.results.config.php" method="post" enctype="multipart/form-data">
            <div class="loginform fix">
                <div class="msg "><h3>Create Courses</h3></div>
                
                <div class="access">
                <?php
                    if (isset($_SESSION['type'])) {
                        echo $_SESSION['type'];
                        unset($_SESSION['type']);
                    }

                ?>
                    <input type="file" name="file">
                    <input name="submit" type="submit" value="Submit" />
                </div>
            </div>
        </form>
		
	</div>

    <div class="text-center">
        <a href="result.php" class="hero-btn">Back</a>
    </div>
<?php
	include_once 'partials/footer.php';
?>