<?php
    include_once 'main-partials/menu.php';
?>
    <section class="form">
        <h1>Student Registration</h1>
        <br><br>
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                <table class="tbl-30">
                    <tr>
                        <td><h5>First Name: </h5></td>
                        <td>
                            <input type="text" name="first" placeholder="Enter your first name" required>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Last Name: </h5></td>
                        <td>
                            <input type="text" name="last" placeholder="Enter your last name" required>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Password: </h5></td>
                        <td>
                            <input type="password" name="password" placeholder="Enter password" required>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Jamb Result: </h5></td>
                        <td>
                            <input type="number" name="jamb" placeholder="Enter password" required>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><h5>WACE Result:  </h5></td>
                        <td>
                            <h3>English is compulosry!</h3>
                            <fieldset>
                                <select name="subject-1" >
                                    <option value="eng">English</option>
                                    <option value="maths">Mathematics</option>
                                    <option value="chem">Chemistry</option>
                                    <option value="phy">Physics</option>
                                    <option value="bio">Biology</option>
                                    <option value="econs">Economics</option>
                                    <option value="geo">Geographic</option>
                                    <option value="f-maths">Futher Mathematics</option>
                                    <option value="td">Technical Studies</option>
                                    <option value="agric">Agricultural Science</option>
                                </select>
                                <select name="scores-1" >
                                    <option value="6">A1</option>
                                    <option value="5">B2</option>
                                    <option value="4">B3</option>
                                    <option value="3">C4</option>
                                    <option value="2">C5</option>
                                    <option value="1">C6</option>
                                    <option value="0">D7</option>
                                    <option value="0">E8</option>
                                    <option value="0">F9</option>
                                </select>
                                <br>
                                <select name="subject-2" >
                                    <option value="eng">English</option>
                                    <option value="maths">Mathematics</option>
                                    <option value="chem">Chemistry</option>
                                    <option value="phy">Physics</option>
                                    <option value="bio">Biology</option>
                                    <option value="econs">Economics</option>
                                    <option value="geo">Geographic</option>
                                    <option value="f-maths">Futher Mathematics</option>
                                    <option value="td">Technical Studies</option>
                                    <option value="agric">Agricultural Science</option>
                                </select>
                                <select name="scores-2" >
                                    <option value="6">A1</option>
                                    <option value="5">B2</option>
                                    <option value="4">B3</option>
                                    <option value="3">C4</option>
                                    <option value="2">C5</option>
                                    <option value="1">C6</option>
                                    <option value="0">D7</option>
                                    <option value="0">E8</option>
                                    <option value="0">F9</option>
                                </select>
                                <br>
                                <select name="subject-3" >
                                    <option value="eng">English</option>
                                    <option value="maths">Mathematics</option>
                                    <option value="chem">Chemistry</option>
                                    <option value="phy">Physics</option>
                                    <option value="bio">Biology</option>
                                    <option value="econs">Economics</option>
                                    <option value="geo">Geographic</option>
                                    <option value="f-maths">Futher Mathematics</option>
                                    <option value="td">Technical Studies</option>
                                    <option value="agric">Agricultural Science</option>
                                </select>
                                <select name="scores-3" >
                                    <option value="6">A1</option>
                                    <option value="5">B2</option>
                                    <option value="4">B3</option>
                                    <option value="3">C4</option>
                                    <option value="2">C5</option>
                                    <option value="1">C6</option>
                                    <option value="0">D7</option>
                                    <option value="0">E8</option>
                                    <option value="0">F9</option>
                                </select>
                                <br>
                                <select name="subject-4" >
                                    <option value="eng">English</option>
                                    <option value="maths">Mathematics</option>
                                    <option value="chem">Chemistry</option>
                                    <option value="phy">Physics</option>
                                    <option value="bio">Biology</option>
                                    <option value="econs">Economics</option>
                                    <option value="geo">Geographic</option>
                                    <option value="f-maths">Futher Mathematics</option>
                                    <option value="td">Technical Studies</option>
                                    <option value="agric">Agricultural Science</option>
                                </select>
                                <select name="scores-4" >
                                    <option value="6">A1</option>
                                    <option value="5">B2</option>
                                    <option value="4">B3</option>
                                    <option value="3">C4</option>
                                    <option value="2">C5</option>
                                    <option value="1">C6</option>
                                    <option value="0">D7</option>
                                    <option value="0">E8</option>
                                    <option value="0">F9</option>
                                </select>
                                <br>
                                <select name="subject-5" >
                                    <option value="eng">English</option>
                                    <option value="maths">Mathematics</option>
                                    <option value="chem">Chemistry</option>
                                    <option value="phy">Physics</option>
                                    <option value="bio">Biology</option>
                                    <option value="econs">Economics</option>
                                    <option value="geo">Geographic</option>
                                    <option value="f-maths">Futher Mathematics</option>
                                    <option value="td">Technical Studies</option>
                                    <option value="agric">Agricultural Science</option>
                                </select>
                                <select name="scores-5" >
                                    <option value="6">A1</option>
                                    <option value="5">B2</option>
                                    <option value="4">B3</option>
                                    <option value="3">C4</option>
                                    <option value="2">C5</option>
                                    <option value="1">C6</option>
                                    <option value="0">D7</option>
                                    <option value="0">E8</option>
                                    <option value="0">F9</option>
                                </select>
                            </fieldset>                          
                        <td>
                            
                        </td>
                    </tr>
                   
                    <tr>
                        <td><h5>Faculty: </h5></td>
                        <td>
                            <select name="department" >
                                <option value="department-code">department-name</option>
                                <option value="5">B2</option>
                            </select>
                        </td>  
                    </tr>

                    <tr>
                        <td><h5>Department:  </h5></td>
                        <td>
                            <select name="department" >
                                <option value="department-code">department-name</option>
                                <option value="5">B2</option>
                            </select>
                        </td>  
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="admission"  value="No">
                            <input type="submit" name="submit" class="btn-secondary" value="Registration">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
    
<?php
    include_once 'main-partials/footer.php';
    //link the uoload.php with the registration.php if the admin have cleared ypu for admission
?>