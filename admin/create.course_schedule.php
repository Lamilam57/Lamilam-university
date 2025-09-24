<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Create Courses</h2>
        <div class="clearfix"></div>
		<form action="config/create.course_schedule.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Create Courses Schedule</h3></div>
                
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
                <select name="department">
                        <?php
                            $sql2 = "SELECT * FROM department";
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
                                    
                                }
                            } 
                            else {
                                '<div class="error text-center">No Department Uploaded</div>';
                            }    
                        ?>
                </select>
                <select name="level">
                    <option value="ND 1">ND 1</option>
                    <option value="ND 2">ND 2</option>
                    <option value="HND 1">HND 1</option>
                    <option value="HND 2">HND 2</option>
                </select>
                <select name="semester">
                    <option value="1">ND 1: First Semester</option>
                    <option value="2">ND 1: Second Semester</option>
                    <option value="1">ND 2: First Semester</option>
                    <option value="2">ND 2: Second Semester</option>
                    <option value="1">HND 1: First Semester</option>
                    <option value="2">HND 1: Second Semester</option>
                    <option value="1">HND 2: First Semester</option>
                    <option value="2">HND 2: Second Semester</option>
                </select>

                <select name="course_code">
                        <?php
                            $sql = "SELECT * FROM course";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
        
                            if ($res == true) {
                                
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $code = $row['code'];

                                        if ($row != "") {
                        ?>
                    
                                            <option value="<?php echo $code; ?>"><?php echo $name; ?></option>
                        <?php
                                        } 
                                        else {
                         ?>
                                            <option value="0">No Department</option>
                                            <input type="text" value="No Department"/>
                        <?php
                                        }
                                    }
                                    
                                }
                            } 
                            else {
                                '<div class="error text-center">No Department Uploaded</div>';
                            }    
                        ?>
                </select>
                            

                <select name="course_unit">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                    <input name="submit" type="submit" value="Submit" />
                </div>
            </div>
        </form>
		
	</div>

    <div class="text-center">
        <a href="course_schedule.php" class="hero-btn">Back</a>
    </div>
<?php
	include_once 'partials/footer.php';
?>