<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Update Admin</h2>
        <div class="clearfix"></div>
		<form action="config/update.admin.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Update Account</h3></div>

                <?php
                    $id = $_GET['id'];
					$sql = "SELECT * FROM admin WHERE id = '$id'";
					$res = mysqli_query($conn, $sql);

                    if ($res == true) {
                        $count = mysqli_num_rows($res);

                        if ($count == 1) {
                            $row = mysqli_fetch_assoc($res);
                            $id = $row['id'];
                            $full_name = $row['full_name'];
                            $username = $row['username'];
                        } else {
                            $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                        }
                    }
                    
				?>

                <div class="access">
                    <?php
                        if (isset($_SESSION['sql'])) {
                            echo $_SESSION['sql'];
                            unset ($_SESSION['sql']);
                        }

                        if (isset($_SESSION['fields'])) {
                            echo $_SESSION['fields'];
                            unset ($_SESSION['fields']);
                        }
                    ?>
                    <input type="text" name="full_name" value="<?php echo $full_name; ?>"/>
                    <input type="text" name="username" value="<?php echo $username; ?>"/>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input name="submit" type="submit" value="Submit" />
                </div>
            </div>
        </form>
		
	</div>

    <div class="text-center">
        <a href="user.php" class="hero-btn">Back</a>
    </div>
<?php
	include_once 'partials/footer.php';
?>