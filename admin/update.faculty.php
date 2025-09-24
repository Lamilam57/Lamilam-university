<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Update Admin</h2>
        <div class="clearfix"></div>
		<form action="config/update.faculty.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Update Faculty</h3></div>

                <?php
                        $id= $_GET['id'];
                        $sql = "SELECT * FROM faculty WHERE id = $id";
                        $res = mysqli_query($conn, $sql);

                        if ($res == true) {
                            $count = mysqli_num_rows($res);
                            if ($count == 1) {
                                $row = mysqli_fetch_assoc($res);
                                $id = $row['id'];
                                $name = $row['name'];
                                $dean = $row['dean'];
                                $address = $row['address'];
                            } else {
                                $_SERVER['faculty'] = '<div class="success text-center">No Faculty Avaliable</div>';
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

                        if (isset($_SESSION['faculty'])) {
                            echo $_SESSION['faculty'];
                            unset($_SESSION['faculty']);
                        }

                        if (isset($_SESSION['fields'])) {
                            echo $_SESSION['fields'];
                            unset($_SESSION['fields']);
                        }
                    ?>
                    <input type="text" name="name" value="<?php echo $name; ?>" />
                    <select name="dean">
                        <?php
                            $sql2 = "SELECT * FROM teacher";
                            $res2 = mysqli_query($conn, $sql2);
                            $count2 = mysqli_num_rows($res2);
        
                            if ($res2 == true) {
                                
                                if ($count2 > 0) {
                                    while ($row2 = mysqli_fetch_assoc($res2)) {
                                        $id2 = $row2['id'];
                                        $first = $row2['first'];
                                        $last = $row2['last'];
                                        $t_code = $row2['t_code'];

                                        if ($row2 != "") {
                        ?>
                    
                                            <option <?php if ($dean == $t_code) {echo 'selected'; }?> value="<?php echo $t_code; ?>"><?php echo $first; ?> <?php echo $last; ?></option>
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

                    <textarea name="address" cols="30" rows="10"><?php echo $address; ?></textarea>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
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