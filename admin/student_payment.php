<?php
	include_once 'partials/menu.php';
?>
    <div class="wrapper">
        <br>
        <h2 class="text-center title">Payment Status</h2>
        <div class="clearfix"></div>
		<form action="config/student_payment.config.php" method="post">
            <div class="loginform fix">
                <div class="msg "><h3>Make Payment</h3></div>

                <?php
                    $id = $_GET['id'];
                    $new_id = $_GET['new_id'];
					$sql = "SELECT * FROM student_registration WHERE id = '$id'";
					$res = mysqli_query($conn, $sql);

                    if ($res == true) {
                        $count = mysqli_num_rows($res);

                        if ($count == 1) {
                            $row = mysqli_fetch_assoc($res);
                            $id = $row['id'];
                            $first = $row['first'];
                            $last = $row['last'];
                            $f_code = $row['f_code'];
                            $d_code = $row['d_code'];
                        } else {
                            $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                        }
                    }
                    
				?>

                <div class="access">
                    <?php
                        if (isset($_SESSION['sql'])) {
                            echo $_SESSION['sql'];
                            unset ($_SESSION['sql']);
                        }

                        if (isset($_SESSION['fields'])) {
                            echo $_SESSION['fields'];
                            unset ($_SESSION['fields']);
                        }
                    ?>
                    <input type="text" name="first" value="<?php echo $first; ?>"/>
                    <input type="text" name="last" value="<?php echo $last; ?>"/>
                    <?php
							$query = "SELECT name FROM faculty WHERE code = '$f_code'"; 
							$select = mysqli_query($conn, $query);
							$fetch = mysqli_fetch_assoc($select); 
							$f_name = $fetch['name'];
					?>
                    <input type="text" name="f_name" value="<?php echo $f_name; ?>"/>
                    <?php
							$query2 = "SELECT name FROM department WHERE code = '$d_code'"; 
							$select2 = mysqli_query($conn, $query2);
							$fetch2 = mysqli_fetch_assoc($select2); 
							$d_name = $fetch2['name'];
					?>
                    <input type="text" name="d_name" value="<?php echo $d_name; ?>"/>
                    <input type="text" name="paid" placeholder="Amount Paid"/>
                    <input type="text" name="receipt" placeholder="Receipt Number"/>
                    <div>
                        <h3>Payment Type</h3>
                        <select name="type">
                            <option value="Full">Full</option>
                            <option value="Part">Part</option>
                            <option value="Balance">Balance</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    
                    <div>
                        <h3>Payment Status</h3>
                        <select name="status">
                            <option value="Paid">Paid</option>
                            <option value="Pending">Pending</option>
                        </select>
                    </div>
                    
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="new_id" value="<?php echo $new_id; ?>">
                    <input type="hidden" name="f_code" value="<?php echo $f_code; ?>">
                    <input type="hidden" name="d_code" value="<?php echo $d_code; ?>">
                    <input name="submit" type="submit" value="Submit" />
                </div>
            </div>
        </form>
		
	</div>

    <div class="text-center">
        <a href="student.php" class="hero-btn">Back</a>
    </div>
<?php
	include_once 'partials/footer.php';
?>