<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Create Department</h2>
        <div class="clearfix"></div>
		<form action="config/create.department.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Create Department</h3></div>
                
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
                    <input type="text" name="name" placeholder="Departmental Name"/>
                    <select name="hod">
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

                    <input type="text" name="program" placeholder="Departmental Program"/>
                    <select name="f_code">
                        <?php
                            $sql2 = "SELECT * FROM faculty";
                            $res2 = mysqli_query($conn, $sql2);
                            $count2 = mysqli_num_rows($res2);
        
                            if ($res2 == true) {
                                
                                if ($count2 > 0) {
                                    while ($row2 = mysqli_fetch_assoc($res2)) {
                                        $id2 = $row2['id'];
                                        $name2 = $row2['name'];
                                        $code2 = $row2['code'];

                                        if ($row2 != "") {
                        ?>
                    
                                            <option value="<?php echo $code2; ?>" selected><?php echo $name2; ?></option>
                        <?php
                                        } 
                                        else {
                         ?>
                                            <option value="0">No Department</option>
                                            <input type="text" value="No Department"/>
                        <?php
                                        }
                                    }
                                        ?>
                                        <input type="text" value="<?php echo $code2; ?>"/>
                                        <?php
                        
                                    
                                }
                            } 
                            else {
                                '<div class="error text-center">No Department Uploaded</div>';
                            }    
                        ?>

<?php /*

$sql2 = "SELECT * FROM faculty WHERE name = $name";
$res2 = mysqli_query($conn, $sql2);
$count = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
$code2 = $row['code'];
$id2 = $row['id'];


if ($id == $id2) {
    ?>
    <input type="text" value="<?php echo $code; ?>"/>
    <?php
} else {
    ?>
    <input type="text" value="<?php echo $code; ?>"/>
    <?php
}

*/
?>
                
                    <!--<input type="text" value="<?php //echo $code; ?>"/> -->
                        
                    </select>
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