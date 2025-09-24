<?php
    require_once 'partials/menu.php';
?>
	
		<div class="loginform fix" style="margin: 70px auto;">
			<div class="msg "><h3> Bio-Data Form</h3></div>
				<div class="access">
					<form action="config/index.config.php" method="post" enctype="multipart/form-data">
						<?php
							if (isset($_SESSION['sql'])) {
								echo $_SESSION['sql'];
								unset($_SESSION['sql']);
							}

                            if (isset($_SESSION['registration'])) {
								echo $_SESSION['registration'];
								unset($_SESSION['registration']);
							}

							if (isset($_SESSION['fields'])) {
								echo $_SESSION['fields'];
								unset($_SESSION['fields']);
							}

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
						?>
                        <tr>
                            <?php
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM student WHERE id = '$id'";
                                $res = mysqli_query($conn, $sql);
                                if ($res == false) {
                                    $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                                } 
                                else {
                                    $count = mysqli_num_rows($res);
                                    
                                        $row = mysqli_fetch_assoc($res);
                                        $first = $row['first'];
                                        $last = $row['last'];
                                        $email = $row['email'];
                                    
                                }
                                
                            ?>
                            <th>
                                <h3>First Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="first" value="<?php echo $first; ?>">
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Last Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="last" value="<?php echo $last; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Level: </h3>
                            </th>

                            <td>
                                <select name="level">
                                    <option value="ND 1">ND 1</option>
                                    <option value="ND 2">ND 2</option>
                                    <<option value="HND 1">HND 1</option>
                                    <option value="HND 2">HND 2</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Email: </h3>
                            </th>

                            <td>
                                <input type="email" name="email" value="<?php echo $email; ?>" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Phone Number: </h3>
                            </th>

                            <td>
                                <input type="text" name="number" placeholder="Phone Number">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Gender: </h3>
                            </th>

                            <td>
                                <select name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </td>
                        </tr>
						
                        <tr>
                            <th>
                            <br>
                                <h3>Upload your picture: </h3>
                            </th>

                            <td>
                                <input type="file" name="image" />
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h3>Date of Birth: </h3>
                            </th>

                            <td>
                                <input type="date" name="dob" />
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Faculty: </h3>
                            </th>

                            <td>
                                <select name="f_code">
                                <?php
                                    $sql2 = "SELECT * FROM faculty";
                                    $res2 = mysqli_query($conn, $sql2);
                                    if ($res2 == false) {
                                        $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                                    } 
                                    else {
                                        $count2 = mysqli_num_rows($res2);
                                        if ($count2 > 0) {
                                            while ($row2 = mysqli_fetch_assoc($res2)) {
                                                $f_code = $row2['code'];
                                                $f_name = $row2['name'];
                                ?>
                                                <option value="<?php echo $f_code?>"><?php echo $f_name?></option>
                                <?php
                                            }    
                                        } else {
                                            $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                                        }
                                    }
                                ?>
                                    
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Department: </h3>
                            </th>

                            <td>
                                <select name="d_code">
                                <?php
                                    $sql3 = "SELECT * FROM department";
                                    $res3 = mysqli_query($conn, $sql3);
                                    if ($res3 == false) {
                                        $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                                    } 
                                    else {
                                        $count3 = mysqli_num_rows($res3);
                                        if ($count3 > 0) {
                                            while ($row3 = mysqli_fetch_assoc($res3)) {
                                                $d_code = $row3['code'];
                                                $d_name = $row3['name'];
                                                $program = $row3['program'];
                                ?>
                                                <option value="<?php echo $d_code?>"><?php echo $d_name?></option>
                                <?php
                                            }    
                                        } else {
                                            $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                                        }
                                    }
                                ?>
                                    
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Program: </h3>
                            </th>

                            <td>
                                <select name="program">
                                <?php
                                    $sql3 = "SELECT * FROM department";
                                    $res3 = mysqli_query($conn, $sql3);
                                    if ($res3 == false) {
                                        $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                                    } 
                                    else {
                                        $count3 = mysqli_num_rows($res3);
                                        if ($count3 > 0) {
                                            while ($row3 = mysqli_fetch_assoc($res3)) {
                                                $d_code = $row3['code'];
                                                $d_name = $row3['name'];
                                                $program = $row3['program'];
                                ?>
                                                <option value="<?php echo $program?>"><?php echo $program?></option>
                                <?php
                                            }    
                                        } else {
                                            $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                                        }
                                    }
                                ?>
                                    
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Religion: </h3>
                            </th>

                            <td>
                                <select name="religion">
                                    <option value="Christianity">Christianity</option>
                                    <option value="Islamic">Islamic</option>
                                    <option value="Others">Others</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Maritial Status: </h3>
                            </th>

                            <td>
                                <select name="status">
                                    <option value="Single">Single</option>
                                    <option value="Engage">Engage</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Married">Married</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Home Address: </h3>
                            </th>

                            <td>
                                <textarea name="address" cols="30" rows="10"></textarea>
                            </td>
                        </tr>
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <input type="submit" name="submit" value="Submit" />
					</form>
				</div>
			</div>					
		</div>

<?php
    require_once 'partials/footer.php';
?>
