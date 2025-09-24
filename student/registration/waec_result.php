<?php
    require_once 'partials/menu.php';
?>
	
		<div class="loginform fix" style="margin: 70px auto;">
			<div class="msg "><h3>WAEC RESULT</h3></div>
            <br>
				<div class="access">
					<form action="config/waec_result.config.php" method="post" >
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

                        <tr>
                            <th>
                                <h3>Year: </h3>
                            </th>

                            <td>
                                <input type="text" name="year" placeholder="Year" />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Type of Result: </h3>
                            </th>

                            <td>
                                <input type="text" name="type" placeholder="WAEC, GCE, NECO..." />
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Registration Number: </h3>
                            </th>

                            <td>
                                <input type="text" name="reg_number" placeholder="Registration Number" />
                            </td>
                        </tr>

                        <h2>Input results</h2>

                        <tr>
                            <th>
                                <h3>Subject 1: </h3>
                            </th>
                            <td>
                                <select name="subject_1" class="olamide">
                                    <option value="English">English</option>
                                </select>
                            </td>

                            <td>
                                <select name="result_1" class="olamide">
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Subject 2: </h3>
                            </th>
                            <td>
                                <select name="subject_2" class="olamide">
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Futher Mathematics">Futher Mathematics</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Civic Education">Civic Education</option>
                                    <option value="Agricultural Science">Agricultural Science</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                    <option value="Dying and Bleaching">Dying and Bleaching</option>
                                    <option value="Electrical Installation">Electrical Installation</option>
                                    <option value="Government">Government</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Finacial Accounting">Finacial Accounting</option>
                                    <option value="">None</option>
                                </select>
                            </td>

                            <td>
                                <select name="result_2" class="olamide">
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    <option value="">None</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Subject 3: </h3>
                            </th>
                            <td>
                                <select name="subject_3" class="olamide">
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Futher Mathematics">Futher Mathematics</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Civic Education">Civic Education</option>
                                    <option value="Agricultural Science">Agricultural Science</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                    <option value="Dying and Bleaching">Dying and Bleaching</option>
                                    <option value="Electrical Installation">Electrical Installation</option>
                                    <option value="Government">Government</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Finacial Accounting">Finacial Accounting</option>
                                    <option value="">None</option>
                                </select>
                            </td>

                            <td>
                                <select name="result_3" class="olamide">
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    <option value="">None</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h3>Subject 4: </h3>
                            </th>
                            <td>
                                <select name="subject_4" class="olamide">
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Futher Mathematics">Futher Mathematics</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Civic Education">Civic Education</option>
                                    <option value="Agricultural Science">Agricultural Science</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                    <option value="Dying and Bleaching">Dying and Bleaching</option>
                                    <option value="Electrical Installation">Electrical Installation</option>
                                    <option value="Government">Government</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Finacial Accounting">Finacial Accounting</option>
                                    <option value="">None</option>
                                </select>
                            </td>

                            <td>
                                <select name="result_4" class="olamide">
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    <option value="">None</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Subject 5: </h3>
                            </th>
                            <td>
                                <select name="subject_5" class="olamide">
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Futher Mathematics">Futher Mathematics</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Civic Education">Civic Education</option>
                                    <option value="Agricultural Science">Agricultural Science</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                    <option value="Dying and Bleaching">Dying and Bleaching</option>
                                    <option value="Electrical Installation">Electrical Installation</option>
                                    <option value="Government">Government</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Finacial Accounting">Finacial Accounting</option>
                                    <option value="">None</option>
                                </select>
                            </td>

                            <td>
                                <select name="result_5" class="olamide">
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    <option value="">None</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Subject 6: </h3>
                            </th>
                            <td>
                                <select name="subject_6" class="olamide">
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Futher Mathematics">Futher Mathematics</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Civic Education">Civic Education</option>
                                    <option value="Agricultural Science">Agricultural Science</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                    <option value="Dying and Bleaching">Dying and Bleaching</option>
                                    <option value="Electrical Installation">Electrical Installation</option>
                                    <option value="Government">Government</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Finacial Accounting">Finacial Accounting</option>
                                    <option value="">None</option>
                                </select>
                            </td>

                            <td>
                                <select name="result_6" class="olamide">
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    <option value="">None</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Subject 7: </h3>
                            </th>
                            <td>
                                <select name="subject_7" class="olamide">
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Futher Mathematics">Futher Mathematics</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Civic Education">Civic Education</option>
                                    <option value="Agricultural Science">Agricultural Science</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                    <option value="Dying and Bleaching">Dying and Bleaching</option>
                                    <option value="Electrical Installation">Electrical Installation</option>
                                    <option value="Government">Government</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Finacial Accounting">Finacial Accounting</option>
                                    <option value="">None</option>
                                </select>
                            </td>

                            <td>
                                <select name="result_7" class="olamide">
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    <option value="">None</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Subject 8: </h3>
                            </th>
                            <td>
                                <select name="subject_8" class="olamide">
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Futher Mathematics">Futher Mathematics</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Civic Education">Civic Education</option>
                                    <option value="Agricultural Science">Agricultural Science</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                    <option value="Dying and Bleaching">Dying and Bleaching</option>
                                    <option value="Electrical Installation">Electrical Installation</option>
                                    <option value="Government">Government</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Finacial Accounting">Finacial Accounting</option>
                                    <option value="">None</option>
                                </select>
                            </td>

                            <td>
                                <select name="result_8" class="olamide">
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    <option value="">None</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <h3>Subject 9: </h3>
                            </th>
                            <td>
                                <select name="subject_9" class="olamide">
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Futher Mathematics">Futher Mathematics</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Civic Education">Civic Education</option>
                                    <option value="Agricultural Science">Agricultural Science</option>
                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                    <option value="Dying and Bleaching">Dying and Bleaching</option>
                                    <option value="Electrical Installation">Electrical Installation</option>
                                    <option value="Government">Government</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Finacial Accounting">Finacial Accounting</option>
                                    <option value="None">None</option>
                                </select>
                            </td>

                            <td>
                                <select name="result_9" class="olamide">
                                    <option value="A1">A1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                    <option value="C6">C6</option>
                                    <option value="D7">D7</option>
                                    <option value="E8">E8</option>
                                    <option value="F9">F9</option>
                                    <option value="None">None</option>
                                </select>
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