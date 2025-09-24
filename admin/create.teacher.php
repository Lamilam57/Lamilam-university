<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Create Department</h2>
        <div class="clearfix"></div>
		<form action="config/create.teacher.config.php" method="post" enctype="multipart/form-data">
            <div class="loginform fix">
                <div class="msg "><h3>Create Department</h3></div>
                
                <div class="access">
                <?php
                    if (isset($_SESSION['check'])) {
                        echo $_SESSION['check'];
                        unset($_SESSION['check']);
                    }

                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }

                    if (isset($_SESSION['big'])) {
                        echo $_SESSION['big'];
                        unset($_SESSION['big']);
                    }

                    if (isset($_SESSION['type'])) {
                        echo $_SESSION['type'];
                        unset($_SESSION['type']);
                    }

                    if (isset($_SESSION['fields'])) {
                        echo $_SESSION['fields'];
                        unset($_SESSION['fields']);
                    }

                    if (isset($_SESSION['sql'])) {
                        echo $_SESSION['sql'];
                        unset($_SESSION['sql']);
                    }

                    if (isset($_SESSION['age'])) {
                        echo $_SESSION['age'];
                        unset($_SESSION['age']);
                    }

                ?>
                    <input type="text" name="first" placeholder="First Name"/>
                    <input type="text" name="last" placeholder="Last Name"/>
                    <input type="file" name="image" />
                    
                    <select name="designation">
                        <option value="prof">Professor</option>
                        <option value="ass-prof">Associate Professor</option>
                        <option value="leact_1">Leactuer 1</option>
                        <option value="leact_2">Leactuer 2</option>
                        <option value="leact_3">Leactuer 3</option>
                        <option value="ass_leact">Assistant Leactuer</option>
                        <option value="grad">Graduate Assistant</option>
                        <option value="tech">Technologist</option>
                        <option value="chief_leact">Chief Leactuer</option>
                        <option value="prin_leact">Principal Leactuer</option>
                        <option value="instr">Instructor</option>
                    </select>
                    <select name="f_code">
                        <?php
                            $sql = "SELECT * FROM faculty";
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
                    
                                            <option value="<?php echo $code; ?>" selected><?php echo $name; ?></option>
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

                    <select name="d_code">
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
                    <input type="email" name="email" placeholder="E-mail Address">
                    <input type="number" name="age" placeholder="Enter Age">
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <textarea name="address" cols="30" rows="10" placeholder="Home Address"></textarea>
                    <input name="submit" type="submit" value="Submit" />
                </div>
            </div>
        </form>
		
	</div>

    <div class="text-center">
        <a href="teacher.php" class="hero-btn">Back</a>
    </div>
<?php
	include_once 'partials/footer.php';
?>