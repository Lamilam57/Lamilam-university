<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Create Faculty</h2>
        <div class="clearfix"></div>
		<form action="config/create.faculty.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Create Faculty</h3></div>
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
                
                <div class="access">
                    <input type="text" name="name" placeholder="Faculty's Name"/>
                    <select name="dean">
                        <?php
                            $sql = "SELECT * FROM teacher";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
        
                            if ($res == true) {
                                
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $id = $row['id'];
                                        $first = $row['first'];
                                        $last = $row['last'];
                                        $t_code = $row['t_code'];

                                        if ($row != "") {
                        ?>
                    
                                            <option value="<?php echo $t_code; ?>" selected><?php echo $first; ?> <?php echo $last; ?></option>
                        <?php
                                        } 
                                        else {
                         ?>
                                            <option value="0">No Faculty</option>
                                            
                        <?php
                                        }
                                    }
                                }
                            } 
                            else {
                                '<div class="error text-center">No Faculty Uploaded</div>';
                            }    
                        ?>
                    </select>

                    <textarea name="address" cols="30" rows="10" placeholder="Faculty's Address"></textarea>
                    <input name="submit" type="submit" value="Submit" />
                </div>
            </div>
        </form>
		
	</div>

    <div class="text-center">
        <a href="faculty.php" class="hero-btn">Back</a>
    </div>
<?php
	include_once 'partials/footer.php';
?>