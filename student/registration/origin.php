<?php
    require_once 'partials/menu.php';
?>
	
		<div class="loginform fix" style="margin: 70px auto;">
			<div class="msg "><h3> State of Origin</h3></div>
				<div class="access">
					<form action="config/origin.config.php" method="post" >
						<?php
							if (isset($_SESSION['sql'])) {
								echo $_SESSION['sql'];
								unset($_SESSION['sql']);
							}

                            if (isset($_SESSION['success'])) {
								echo $_SESSION['success'];
								unset($_SESSION['success']);
							}

							if (isset($_SESSION['fields'])) {
								echo $_SESSION['fields'];
								unset($_SESSION['fields']);
							}

						?>
                            <th>
                                <h3>Local Government Area: </h3>
                            </th>

                            <td>
                                <input type="text" name="lga" placeholder="Local Government Area" />
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>State of Origin: </h3>
                            </th>

                            <td>
                                <input type="text" name="state" placeholder="State of Origin" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Nationality: </h3>
                            </th>

                            <td>
                                <input type="text" name="nation" placeholder="nationality" />
                            </td>
                        </tr>
                        
						
                        <?php
                            $new_id = $_GET['new_id'];
                        ?>

						<input type="hidden" name="new_id" value="<?php echo $new_id; ?>" />
                        <input type="submit" name="submit" value="Submit" />
					</form>
				</div>
			</div>					
		</div>

<?php
    require_once 'partials/footer.php';
?>
