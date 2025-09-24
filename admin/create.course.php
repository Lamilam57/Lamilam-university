<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Create Courses</h2>
        <div class="clearfix"></div>
		<form action="config/create.course.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Create Courses</h3></div>
                
                <div class="access">
                <?php
                    if (isset($_SESSION['fields'])) {
                        echo $_SESSION['fields'];
                        unset($_SESSION['fields']);
                    }

                    if (isset($_SESSION['sql'])) {
                        echo $_SESSION['sql'];
                        unset($_SESSION['sql']);
                    }

                ?>
                    <input type="text" name="name" placeholder="Course Name"/>
                    <input type="text" name="code" placeholder="Course Code"/>
                    <input name="submit" type="submit" value="Submit" />
                </div>
            </div>
        </form>
		
	</div>

    <div class="text-center">
        <a href="course.php" class="hero-btn">Back</a>
    </div>
<?php
	include_once 'partials/footer.php';
?>