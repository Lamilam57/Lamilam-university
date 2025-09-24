<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Create Account</h2>
        <div class="clearfix"></div>
		<form action="config/create.admin.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Create Admin Account</h3></div>
                <?php
                
                    if (isset($_SESSION['fields'])) {
                        echo $_SESSION['fields'];
                        unset ($_SESSION['fields']);
                    }
                    
                    if (isset($_SESSION['user'])){
                        echo $_SESSION['user'];
                        unset ($_SESSION['user']);
                    }

                    if (isset($_SESSION['sql'])){
                        echo $_SESSION['sql'];
                        unset ($_SESSION['sql']);
                    }
                    
                    

                ?>
                <div class="access">
                    <input type="text" name="full_name" placeholder="Full Name"/>
                    <input type="text" name="username" placeholder="Username"/>
                    <input type="password" name="password" placeholder="Password"/>
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