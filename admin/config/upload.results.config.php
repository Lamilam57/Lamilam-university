<?php

if (isset($_POST['submit'])) {
    
    require_once '../../config/conn.config.php';

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_error = $_FILES['file']['error'];
    $file_type = $_FILES['file']['type'];

    $ext = explode('.', $file_name);
    $fileActualExt= strtolower(end($ext));
    $allow = array('csv');
        
    if (in_array($fileActualExt, $allow)) {
        if ($file_error === 0) {
            if ($file_size < 5*1024*1024) {

                $file = "file".rand(10000, 99999).".".$fileActualExt;
                $fileDestination='../../img/files/'.$file;
                $check = move_uploaded_file($file_tmp_name, $fileDestination);

                if ($check != true) {
                    $_SESSION['check'] = '<div class="error text-center">File unable to Upload</div>';
                    header("Location: ../upload.results.php");
                    exit();
                } else {
                    $i = 0;
                    if($_FILES['file']['name']){
                        $filename2 = explode(".", $_FILES['file']['name']);
                        if($filename2[1] == 'csv'){
                            //echo "yes";
                            $handler2 =fopen($fileDestination, "r");
                            while($column2 = fgetcsv($handler2)){
                                if($i > 0){
                                    //$insert = "insert into test values(Null,'ade','wale','3')";
                                    //$query = mysqli_query($conn, $insert);
                                    
                                    $insert2 = "update student_course_registration set
                                        score = '" .$column2[5]."' 
                                        WHERE matric_no = '" .$column2[0]."' 
                                        AND semester = '" .$column2[1]."' 
                                        AND level = '" .$column2[2]."' 
                                        AND session =  '" .$column2[3]."' 
                                        AND course_code ='" .$column2[4]."'
                                    ";
                                    $query2 = mysqli_query($conn, $insert2);
                                }
                                $i++;
                            }
                            if ($query2 == true) {
                                $_SESSION['create'] = '<div class="success text-center">Result Successfully Uploaded</div>';
                                header("Location: ../result.php");
                                exit();
                            } else {
                                $_SESSION['sql'] = '<div class="error text-center">SQL Error</div>';
                            }
                            fclose($handler2);
                        }
                    }    
                    
                }    
                    
                
            } else {
                $_SESSION['big'] = '<div class="error text-center">Your file is too big</div>';
                header("Location: ../upload.results.php");
                exit();
            }
            
        } else {
            $_SESSION['error'] = '<div class="error text-center">There was an error uploading this file</div>';
            header("Location: ../upload.results.php");
            exit();
        }
        
    }
    else {
        $_SESSION['type'] = '<div class="error text-center">You cannot upload this kind of file</div>';
        header("Location: ../upload.results.php");
        exit();
    }   
    


} else {
    header("Location: ../upload.results.php");
    exit();
}
