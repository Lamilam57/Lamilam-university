<?php
	include_once 'partials/menu.php';
?>
    
    <br>
        <h2 class="text-center title">Insert Course</h2>
        <div class="clearfix"></div>
		<form action="" method="post" enctype="multipart/form-data">

        <?php
            if (isset($_SESSION['sql'])) {
                echo $_SESSION['sql'];
                unset($_SESSION['sql']);
            }
        ?>
            <div class="loginform fix">
                <input type="file" name="file">
                <input name="submit" type="submit" value="Upload" />
            </div>
        </form>
		<div class="text-center">
			<a href="course.php" class="hero-btn">Back</a>
		</div>
	</div>
    
<?php
	include_once 'partials/footer.php';
?>

<?php
if(isset($_POST['submit'])){
    $i = 0;
    if($_FILES['file']['name']){
        $filename = explode(".", $_FILES['file']['name']);
        if($filename[1] == 'csv'){
            $handler =fopen($_FILES['file']['tmp_name'], "r");
            while($column = fgetcsv($handler)){
                if($i > 0){
                    $insert = "insert into course (code,name) 
                    VALUES('" .$column[0]."' , '" .$column[1]. "')";
                    $query = mysqli_query($conn, $insert);
                }
                $i++;
            }
            if ($query == true) {
                $_SESSION['insert'] = '<div class="success text-center">Successfully Inserted</div>';
                header("Location: course.php");
                exit();
            } else {
                $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
            }
            fclose($handler);
        }
    }

}
?>