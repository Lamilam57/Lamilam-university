<?php
    require_once 'partials/menu.php';
?>
	
		<div class="loginform fix" style="margin: 70px auto;">
			<div class="msg "><h3>Parent and Next of Kin</h3></div>
            <br>
				<div class="access">
					<form action="config/parent_nok.config.php" method="post" >
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
                        <h2>Parent/Guardian(Male)</h2>
                        <tr>
                                <h3>First Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="male_first" placeholder="First Name(Male)"/>
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Last Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="male_last" placeholder="Last Name(Male)"/>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Maiden Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="male_maiden" placeholder="Maiden Name(Male)">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Email: </h3>
                            </th>

                            <td>
                                <input type="email" name="male_email" placeholder="Email"/>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Phone Number: </h3>
                            </th>

                            <td>
                                <input type="text" name="male_number" placeholder="Phone Number">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Religion: </h3>
                            </th>

                            <td>
                                <select name="male_religion">
                                    <option value="Christianity">Christianity</option>
                                    <option value="Islamic">Islamic</option>
                                    <option value="Others">Others</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Local Government Area: </h3>
                            </th>

                            <td>
                                <input type="text" name="male_lga" placeholder="Local Government Area" />
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>State of Origin: </h3>
                            </th>

                            <td>
                                <input type="text" name="male_state" placeholder="State of Origin" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Nationality: </h3>
                            </th>

                            <td>
                                <input type="text" name="male_nation" placeholder="nationality" />
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Occupation: </h3>
                            </th>

                            <td>
                                <textarea name="male_occupation" cols="30" rows="10"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Home Address: </h3>
                            </th>

                            <td>
                                <textarea name="male_address" cols="30" rows="10"></textarea>
                            </td>
                        </tr>


                        <!-- Female-->
                        <br><br>
                        <h2>Parent/Guardian(Female)</h2>
                        <tr>
                                <h3>First Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="female_first" placeholder="First Name(Female)" />
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Last Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="female_last" placeholder="Last Name(Female)">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Maiden Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="female_maiden" placeholder="Maiden Name(Female)">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Email: </h3>
                            </th>

                            <td>
                                <input type="email" name="female_email" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Phone Number: </h3>
                            </th>

                            <td>
                                <input type="text" name="female_number" placeholder="Phone Number">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Religion: </h3>
                            </th>

                            <td>
                                <select name="female_religion">
                                    <option value="Christianity">Christianity</option>
                                    <option value="Islamic">Islamic</option>
                                    <option value="Others">Others</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Local Government Area: </h3>
                            </th>

                            <td>
                                <input type="text" name="female_lga" placeholder="Local Government Area" />
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>State of Origin: </h3>
                            </th>

                            <td>
                                <input type="text" name="female_state" placeholder="State of Origin" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Nationality: </h3>
                            </th>

                            <td>
                                <input type="text" name="female_nation" placeholder="nationality" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Occupation: </h3>
                            </th>

                            <td>
                                <textarea name="female_occupation" cols="30" rows="10"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Home Address: </h3>
                            </th>

                            <td>
                                <textarea name="female_address" cols="30" rows="10"></textarea>
                            </td>
                        </tr>

                            <!-- Next of kin-->
                            <br><br>
                        <h2>Next of kin</h2>
                        <tr>
                                <h3>First Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="nok_first" placeholder="First Name(Next of Kin)" />
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Last Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="nok_last" placeholder="Last Name(Next of Kin)" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Maiden Name: </h3>
                            </th>

                            <td>
                                <input type="text" name="nok_maiden" placeholder="Madien Name(Next of Kin)" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Email: </h3>
                            </th>

                            <td>
                                <input type="email" name="nok_email" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Phone Number: </h3>
                            </th>

                            <td>
                                <input type="text" name="nok_number" placeholder="Phone Number">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Religion: </h3>
                            </th>

                            <td>
                                <select name="nok_religion">
                                    <option value="Christianity">Christianity</option>
                                    <option value="Islamic">Islamic</option>
                                    <option value="Others">Others</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Local Government Area: </h3>
                            </th>

                            <td>
                                <input type="text" name="nok_lga" placeholder="Local Government Area" />
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>State of Origin: </h3>
                            </th>

                            <td>
                                <input type="text" name="nok_state" placeholder="State of Origin" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Nationality: </h3>
                            </th>

                            <td>
                                <input type="text" name="nok_nation" placeholder="nationality" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Occupation: </h3>
                            </th>

                            <td>
                                <textarea name="nok_occupation" cols="30" rows="10"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Home Address: </h3>
                            </th>

                            <td>
                                <textarea name="nok_address" cols="30" rows="10"></textarea>
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
