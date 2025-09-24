<?php
    require_once 'partials/menu.php';
?>
<?php
	if (isset($_SESSION['sql'])) {
		echo $_SESSION['sql'];
		unset($_SESSION['sql']);
	}

    if (isset($_SESSION['registration'])) {
		echo $_SESSION['registration'];
		unset($_SESSION['registration']);
	}

    if (isset($_SESSION['course'])) {
		echo $_SESSION['course'];
		unset($_SESSION['course']);
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

<?php 
               $semester = $_GET['semester'];
            ?>

<section class="profile">
    <div class="row">
        <div class="campus-col1">
            <?php
                $id = $_GET['id'];

                $sql = "SELECT * FROM student_registration WHERE new_id = $id";
                $res = mysqli_query($conn, $sql);
                if ($res == true) {
                    $check = mysqli_num_rows($res);
                    if ($check > 0) {
                        $row = mysqli_fetch_assoc($res);
                        $first = $row['first'];
                        $last = $row['last'];
                        $matric_no = $row['matric_no'];
                        $image = $row['image'];
                        $level = $row['level'];
                        $d_code = $row['d_code'];
                        $program = $row['program'];
                        $f_code = $row['f_code'];
                    } else {
                        $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                    }
                    
                } else {
                    $_SESSION['sql'] =  '<div class="error text-center">SQL Error564714567841</div>';
                }
                
            ?>
            <table>
                <tr>
                    <th>Reg/Matriculation No: </th>
                    <td><?php echo $matric_no ?></td>
                </tr>

                <tr>
                    <th>Full Name: </th>
                    <td><?php echo $first . " " . $last?> </td>
                </tr>

                <tr>
                    <th>Faculty: </th>
                    <?php
                        $sql2 = "SELECT * FROM faculty WHERE code = '$f_code'";
                        $res2 = mysqli_query($conn, $sql2);
                        $check = mysqli_num_rows($res2);
                        if ($check > 0) {
                            $row2 = mysqli_fetch_assoc($res2);
                            $f_tile = $row2['name'];
                            $f_code2 = $row2['code'];
                            if ($f_code === $f_code2) {
                    ?>
                                <td><?php echo $f_tile?></td>

                    <?php
                            } else {
                                $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                            }
                        } else {
                            $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                        }
                                    
                    ?>
                    
                </tr>

                <tr>
                    <th>Department: </th>
                    <?php
                        $sql3 = "SELECT * FROM department WHERE code = '$d_code'";
                        $res3 = mysqli_query($conn, $sql3);
                        $check = mysqli_num_rows($res3);
                        if ($check > 0) {
                            $row3 = mysqli_fetch_assoc($res3);
                            $d_tile = $row3['name'];
                            $d_code2 = $row3['code'];
                            if ($d_code === $d_code2) {
                    ?>
                                <td><?php echo $d_tile?></td>

                    <?php
                            } else {
                                $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                            }
                        } else {
                            $_SESSION['sql'] =  '<div class="error text-center">SQL Error</div>';
                        }
                                    
                    ?>
                </tr>

                <tr>
                    <th>Programme: </th>
                    <td><?php echo $program ?></td>
                </tr>

                <tr>
                    <th>Level: </th>
                    <td><?php echo $level ?></td>
                </tr>
            </table>
        </div>

        <div class="campus-col2">
            <div class="layer">
                <h3>Passport</h3>
            </div>
                        <?php
                            if ($image =='') {
                                $_SESSION['image'] =  '<div class="error text-center">No Image Found</div>';
                            } 
                            else {
                        ?>
                            <img src="../../img/student/<?php echo $image ?>" width="150px">  
                        <?php
                            }                            
                        ?>
                      
            </div>
               
        </div>
    </section>

                                <!-- Button trigger modal -->
                                <!-- Button trigger modal -->
                                <!-- Button trigger modal -->
                                <!-- Button trigger modal -->
                                <!-- Button trigger modal -->

    
<?php
if ($level == "ND 2" || $level == "HND 2") {
?>
    <h3 class="error text-center">Select Carry Over Course(s)</h3>
    <div class="text-center">
        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Carry Over Courses</button>
    </div>
                                    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Please Select Carry Over Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="config/course_registration.config2.php?semester=<?php echo $semester?>" method="post">
                        <table class="table">
                            <?php
                                $sql5 = "SELECT * FROM course"; 
                                $res5 = mysqli_query($conn, $sql5);
                                $check5 = mysqli_num_rows($res5);
                                if ($check5 > 0) {
                                    $row5 = mysqli_fetch_assoc($res5);
                                    $name = $row5['name'];
                                    $code = $row5['code'];
                                }  
                            ?>
                            <tr>
                                <th>Course Code</th>
                                <th>Course Title</th>
                                <th>Course Unit</th>
                            </tr>

				            <?php
                
                                if ($level == "ND 2") {
                                    $sql6 = "SELECT a.course_code, b.name, a.course_unit FROM course_schedule a, course b
                                    WHERE a.course_code = b.code 
                                    AND a.level = 'ND 1'  
                                    AND a.department = '$d_code'
                                    AND a.semester = 2";

                                    $res6 = mysqli_query($conn, $sql6);
                                    $check6 = mysqli_num_rows($res6);
                                    if ($check6 > 0) {
                                        while ($row6 = mysqli_fetch_assoc($res6)) {
                                            $course_unit2 = $row6['course_unit'];
                                            $course_code2 = $row6['course_code'];
                                            $course_name2 = $row6['name'];
                                            if ($row6 != "") {	
                            ?>
                                                <tr>
                                                    <td><input type="checkbox" name="code[]" value="<?php echo $course_code2?>"><?php echo $course_code2; ?></td>
                                                    <td><?php echo $course_name2; ?></td>
                                                    <td><input type="hidden" name="unit[]" value="<?php echo $course_unit2?>"><?php echo $course_unit2; ?></td>
                                                </tr>
                            <?php
                                            } 
                                        } 
                                    }
                                }
                                else if ($level = "HND 2") {
                                    $sql6 = "SELECT a.course_code, b.name, a.course_unit FROM course_schedule a, course b
                                    WHERE a.course_code = b.code AND a.level = 'HND 1'  AND a.department = '$d_code'
                                    AND a.semester = 2";

                                    $res6 = mysqli_query($conn, $sql6);
                                    $check6 = mysqli_num_rows($res6);
                                    if ($check6 > 0) {
                                        while ($row6 = mysqli_fetch_assoc($res6)) {
                                            $course_unit2 = $row6['course_unit'];
                                            $course_code2 = $row6['course_code'];
                                            $course_name2 = $row6['name'];
                                    
                                            $res6 = mysqli_query($conn, $sql6);
                                            $check6 = mysqli_num_rows($res6);
                                            if ($check6 > 0) {
                                                while ($row6 = mysqli_fetch_assoc($res6)) {
                                                    $course_unit2 = $row6['course_unit'];
                                                    $course_code2 = $row6['course_code'];
                                                    $course_name2 = $row6['name'];
        
                                                    if ($row6 != "") {	
                            ?>
                                                        <tr>
                                                            <td><input type="checkbox" name="code[]" value="<?php echo $course_code2?>"><?php echo $course_code2; ?></td>
                                                            <td><?php echo $course_name2; ?></td>
                                                            <td><input type="hidden" name="unit[]" value="<?php echo $course_unit2?>"><?php echo $course_unit2; ?></td>
                                                        </tr>
                            <?php
                                                    } 
                                                } 
                                            }
                                                           
                                        }
                                    }
                                }      
                            ?>           
                        </table>   
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

                                    <!--Normal form-->
                                    <!--Normal form-->
                                    <!--Normal form-->
                                    <!--Normal form-->
                                    <!--Normal form-->
                                    <!--Normal form-->

    <section class="wrapper">    
        <form action="config/course_registration.config2.php?semester=<?php echo $semester?>" method="post">
            <div class="clearfix"></div>   
                <div class="text-center" style="width: 30%;">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Session</span>
                        </div>
                        <input type="text" name="session" class="form-control" placeholder="2022/2023" aria-label="Session" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <table class="table">
                <?php
                    $sql5 = "SELECT * FROM course"; 
                    $res5 = mysqli_query($conn, $sql5);
                    $check5 = mysqli_num_rows($res5);
                    if ($check5 > 0) {
                        $row5 = mysqli_fetch_assoc($res5);
                        $name = $row5['name'];
                        $code = $row5['code'];
                    } 
                ?>
                <tr>
					<th>Course Code</th>
                    <th>Course Title</th>
                    <th>Course Unit</th>
				</tr>
				<?php
					$sql4 = "SELECT a.course_code, b.name, a.course_unit FROM course_schedule a, course b
                        WHERE a.course_code = b.code AND a.level = '$level'  AND a.department = '$d_code'
                        AND a.semester = 2
                    ";
                    //"SELECT a.course_code, b.name, a.course_unit FROM course_schedule a, course b 
                   // WHERE a.course_code = b.code AND a.level = 'ND 2' AND a.department = '29PH'
                     //AND a.semester = 2;";
                     //echo $level;
                     //echo $d_code2;
                    $res4 = mysqli_query($conn, $sql4);
                    $check4 = mysqli_num_rows($res4);
                    if ($check4 > 0) {
                        while ($row4 = mysqli_fetch_assoc($res4)) {
                            $course_unit = $row4['course_unit'];
                            $course_code = $row4['course_code'];
                            $course_name = $row4['name'];
                            if ($row4 != "") {
				?>			
					<tr>
						<td><input type="checkbox" name="code[]" value="<?php echo $course_code?>"><?php echo $course_code; ?></td>
                        <td><?php echo $course_name; ?></td>
                        <td><input type="hidden" name="unit[]" value="<?php echo $course_unit?>"><?php echo $course_unit; ?></td>		
					</tr>
				<?php
							} 
						}
					}
                ?>
            </table>
            <br>
            
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="hidden" name="semester" value="<?php echo $semester?>">
            <input type="hidden" name="first" value="<?php echo $first?>">
            <input type="hidden" name="last" value="<?php echo $last?>">
            <input type="hidden" name="d_title" value="<?php echo $d_tile?>">
            <input type="hidden" name="matric_no" value="<?php echo $matric_no?>">
            <input type="hidden" name="level" value="<?php echo $level?>">
            <input type="submit" name="submit" value="Submit" /><br>
        </form>
    </section> 
<?php
    require_once 'partials/footer.php';
?>