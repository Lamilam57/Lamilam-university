<?php
    //include_once '../main-partials/menu.php';
?>
    <section class="form">
        <h1>Student Admission Form</h1>
        <br>
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                <table class="tbl-40">
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
                        <td><h5>Username: </h5></td>
                        <td>
                            <input type="text" name="last" placeholder="Enter username" required>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Password: </h5></td>
                        <td>
                            <input type="password" name="password" placeholder="Enter password" required>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Phone Number: </h5></td>
                        <td>
                            <input type="tel" name="tel" placeholder="Enter your phone number" required>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Email: </h5></td>
                        <td>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Gender: </h5></td>
                        <td>
                            <input type="radio" name="gender" value="Male" required>Male
                            <input type="radio" name="gender" value="Female" required>Female
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Your Picture: </h5></td>
                        <td>
                            <input type="file" name="image">
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
                            <input type="submit" name="submit" class="btn-secondary" value="Registration">
                        </td>
                    </tr>
                </table>
                
                
            </form>
        </div>        
    </section>

<?php
    //include_once '../main-partials/footer.php';
?>