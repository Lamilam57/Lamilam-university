<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Update Department</h2>
        <div class="clearfix"></div>
		<form action="config/update.department.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Update Department</h3></div>

                <?php
                        $id= $_GET['id'];
                        $sql = "SELECT * FROM department WHERE id = $id";
                        $res = mysqli_query($conn, $sql);

                        if ($res == true) {
                            $count = mysqli_num_rows($res);
                            if ($count == 1) {
                                $row = mysqli_fetch_assoc($res);
                                $id = $row['id'];
                                $name = $row['name'];
                                $hod = $row['hod'];
                                $program = $row['program'];
                                $f_code = $row['f_code'];
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
                    <select name="hod">
                        <?php
                            $sql3 = "SELECT * FROM teacher";
                            $res3 = mysqli_query($conn, $sql3);
                            $count3 = mysqli_num_rows($res3);
        
                            if ($res3 == true) {
                                
                                if ($count3 > 0) {
                                    while ($row3 = mysqli_fetch_assoc($res3)) {
                                        $id3 = $row3['id'];
                                        $first = $row3['first'];
                                        $last = $row3['last'];
                                        $t_code = $row3['t_code'];

                                        if ($row3 != "") {
                        ?>
                    
                                            <option <?php if ($hod == $t_code) {echo 'selected'; }?> value="<?php echo $t_code; ?>"><?php echo $first; ?> <?php echo $last; ?></option>
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

                    <input type="text" name="program" value="<?php echo $program; ?>"/>
                    <select name="f_code">
                        <?php
                            $sql2 = "SELECT * FROM faculty";
                            $res2 = mysqli_query($conn, $sql2);

                            if ($res2 == true) {
                                $count2 = mysqli_num_rows($res2);
                                if ($count2 > 0) {
                                    while ($row2 = mysqli_fetch_assoc($res2)) {
                                        $f_name = $row2['name'];
                                        $f_code2 = $row2['code'];
                        ?>
                                        <option <?php if ($f_code == $f_code2) {echo 'selected'; }?> value="<?php echo $f_code2; ?>"><?php echo $f_name; ?></option>
                        <?php
                                        }
                                    } else {
                        ?>
                                        <option value="0">No category</option>
                        <?php
                                }
                                
                            
                                
                            } else {
                                $_SERVER['sql'] = '<div class="success text-center">SQL Error</div>';
                            }
                            
                        ?>
                    </select>
                    
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input name="submit" type="submit" value="Submit" />
                </div>
            </div>
        </form>
		
	</div>

    <div class="text-center">
        <a href="department.php" class="hero-btn">Back</a>
    </div>
<?php
	include_once 'partials/footer.php';
?>