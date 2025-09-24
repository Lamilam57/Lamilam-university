<?php
    require_once 'partials/menu.php';
?>
	
		<div class="loginform fix" style="margin: 70px auto;">
			<div class="msg "><h3> Input WAEC Result</h3></div>
				<div class="access">
					<form action="config/complete.config.php" method="post">
						<?php
							if (isset($_SESSION['sql'])) {
								echo $_SESSION['sql'];
								unset($_SESSION['sql']);
							}

							if (isset($_SESSION['password'])) {
								echo $_SESSION['password'];
								unset($_SESSION['password']);
							}

							if (isset($_SESSION['fields'])) {
								echo $_SESSION['fields'];
								unset($_SESSION['fields']);
							}

							if (isset($_SESSION['email'])) {
								echo $_SESSION['email'];
								unset($_SESSION['email']);
							}

							if (isset($_SESSION['no-login-message'])) {
								echo $_SESSION['no-login-message'];
								unset($_SESSION['no-login-message']);
							}
						?>    
                        <tr>
                            <th>
                                <h3>WAEC RESULT: </h3>
                            </th>

                            <td>
                                <input type="text" name="type" placeholder="Type of result"/>
                                <input type="text" name="year" placeholder="Year"/>
                                <input type="text" name="exam_no" placeholder="Exam Number"/>
                            </td>
                        </tr>
                        
                        
						
                        <input type="submit" name="submit" value="Submit" />
					</form>
				</div>
			</div>					
		</div>

<?php
    require_once 'partials/footer.php';
?>
