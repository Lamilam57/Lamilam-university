<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h1 class="text-center title">Update Admin</h1>
        <div class="clearfix"></div>
		<form action="config/update.teacher.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Update Faculty</h3></div>

                <?php
                        $id= $_GET['id'];
                        $current_image = $_GET['image'];
                        $sql = "SELECT * FROM teacher WHERE id = $id";
                        $res = mysqli_query($conn, $sql);

                        if ($res == true) {
                            $count = mysqli_num_rows($res);
                            if ($count == 1) {
                                $row = mysqli_fetch_assoc($res);
                                $id = $row['id'];
                                $first = $row['first'];
                                $last = $row['last'];
                                $hod = $row['hod'];
                                $email = $row['email'];
                                $address = $row['address'];
                                $gender = $row['gender'];
                                $designation = $row['designation'];
                                $t_code = $row['t_code'];
                                $f_code = $row['f_code'];
                                $address = $row['address'];
                                $dean = $row['dean'];
                                $hod = $row['hod'];
                            } else {
                                $_SERVER['teacher'] = '<div class="success text-center">No Department Avaliable</div>';
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

                        if (isset($_SESSION['teacher'])) {
                            echo $_SESSION['teacher'];
                            unset($_SESSION['teacher']);
                        }

                        if (isset($_SESSION['fields'])) {
                            echo $_SESSION['fields'];
                            unset($_SESSION['fields']);
                        }
                    ?>
                    <div>
                        <h3>Current Image</h3>
                            <?php 
                                if ($current_image == "") {
                                    echo '<div class="error text-center">No Image Found</div>';
                                } else {
                            ?>
                                <div><img src="../img/uploads/<?php echo $current_image; ?>" alt="<?php echo $current_image; ?>" style ="width: 100px; height: 100px"></div>
                            <?php
                                }
                            ?>
                        
                    </div>
                    <input type="text" name="first" value="<?php echo $first; ?>"/>
                    <input type="text" name="last" value="<?php echo $last; ?>"/>

                    <div>
                        <h3>Update Image:</h3>
                        <input type="file" name="image">
                    </div>

                    <input type="email" name="email" value="<?php echo $email; ?>"/>
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
                    
                    <select name="designation">
                        <option <?php if ($designation == "prof") {echo 'selected'; }?>  value="prof">Professor</option>
                        <option <?php if ($designation == "ass_prof") {echo 'selected'; }?>  value="ass-prof">Associate Professor</option>
                        <option <?php if ($designation == "leact_1") {echo 'selected'; }?>  value="leact_1">Leactuer 1</option>
                        <option <?php if ($designation == "leact_2") {echo 'selected'; }?>  value="leact_2">Leactuer 2</option>
                        <option <?php if ($designation == "leact_3") {echo 'selected'; }?>  value="leact_3">Leactuer 3</option>
                        <option <?php if ($designation == "ass_leact") {echo 'selected'; }?>  value="ass_leact">Assistant Leactuer</option>
                        <option <?php if ($designation == "grad") {echo 'selected'; }?>  value="grad">Graduate Assistant</option>
                        <option <?php if ($designation == "tech") {echo 'selected'; }?>  value="tech">Technologist</option>
                        <option <?php if ($designation == "chief_leact") {echo 'selected'; }?>  value="chief_leact">Chief Leactuer</option>
                        <option <?php if ($designation == "prin_leact") {echo 'selected'; }?>  value="prin_leact">Principal Leactuer</option>
                        <option <?php if ($designation == "instr") {echo 'selected'; }?>  value="instr">Instructor</option>
                    </select>

                    <div>
                        <h3>Gender:</h3>
                        <input type="radio" <?php if ($gender =="Male") {echo 'checked'; }?> name="gender" value="Male">Male
                        <input type="radio" <?php if ($gender =="Female") {echo 'checked'; }?> name="gender" value="Female">Female                   
                    </div>

                    <textarea name="address" cols="30" rows="10"><?php echo $address; ?></textarea>

                    <div>
                        <h3>Dean of Faculty:</h3>
                        <input type="radio" <?php if ($dean =="Yes") {echo 'checked'; }?> name="dean" value="Yes">Yes
                        <input type="radio" <?php if ($dean =="No") {echo 'checked'; }?> name="dean" value="No">No                
                    </div>
                        <br>
                    <div>
                        <h3>Head of Department:</h3>
                        <input type="radio" <?php if ($hod =="Yes") {echo 'checked'; }?> name="hod" value="Yes">Yes
                        <input type="radio" <?php if ($hod =="No") {echo 'checked'; }?> name="hod" value="No">No                
                    </div>
                        <br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
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