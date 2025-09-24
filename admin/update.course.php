<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Update Course</h2>
        <div class="clearfix"></div>
		<form action="config/update.course.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Update Course</h3></div>

                <?php
                        $id= $_GET['id'];
                        $sql = "SELECT * FROM course WHERE  id= $id";
                        $res = mysqli_query($conn, $sql);

                        if ($res == true) {
                            $count = mysqli_num_rows($res);
                            if ($count == 1) {
                                $row = mysqli_fetch_assoc($res);
                                $id = $row['id'];
                                $name = $row['name'];
                                $code = $row['code'];
                                
                            } else {
                                $_SERVER['department'] = '<div class="success text-center">No Department Avaliable</div>';
                            }
                            
                        } else {
                            $_SERVER['sql'] = '<div class="success text-center">SQL Error</div>';
                        }
                        
                    ?>

                <div class="access">
                    <?php
                        if (isset($_SESSION['sql'])) {
                            echo $_SESSION['sql'];
                            unset($_SESSION['sql']);
                        }

                        if (isset($_SESSION['department'])) {
                            echo $_SESSION['department'];
                            unset($_SESSION['department']);
                        }

                        if (isset($_SESSION['fields'])) {
                            echo $_SESSION['fields'];
                            unset($_SESSION['fields']);
                        }
                    ?>
                    <input type="text" name="name" value="<?php echo $name; ?>"/>
                    <input type="text" name="code" value="<?php echo $code; ?>"/>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
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