<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Change Password</h2>
        <div class="clearfix"></div>
		<form action="config/password.admin.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Create Admin Password</h3></div>
                <?php
                    if (isset($_GET['id'])) {
                        $id= $_GET['id'];
                    }
                ?>
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

                    if (isset($_SESSION['match'])) {
                        echo $_SESSION['match'];
                        unset($_SESSION['match']);
                    }

                    if (isset($_SESSION['invalid'])) {
                        echo $_SESSION['invalid'];
                        unset($_SESSION['invalid']);
                    }
                ?>
                    <input type="password" name="current_password" placeholder="Current Password"/>
                    <input type="password" name="new_password" placeholder="New Password"/>
                    <input type="password" name="confirm_password" placeholder="Comfirm Password"/>
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