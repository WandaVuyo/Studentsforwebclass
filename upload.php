<?php 
    $conn = new mysqli('localhost','root','','cenict');
        
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    if(isset($_POST["submit"])){
        $fileName = $_FILES["ProfilePic"]["name"];
        $LastName = $_POST["Lname"];
        $FirstName = $_POST["Fname"];
        $RegNumber = $_POST["RegNumber"];
        $PhoneNumber = $_POST["PhoneNumber"];
        $Gender = $_POST["Gender"];
        $Department = $_POST["Department"];
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowedTypes = array("jpg", "jpeg", "png");
        $tempName = $_FILES["ProfilePic"]["tmp_name"];
        $targetPath = "uploads/".$fileName;
        if(in_array($ext, $allowedTypes)){
            if(move_uploaded_file($tempName, $targetPath)){
                $sql = "INSERT INTO web (ProfilePic, Lname, Fname, RegNumber, PhoneNumber, Gender, Department) 
                VALUES ('$fileName', '$LastName', '$FirstName', '$RegNumber', '$PhoneNumber', '$Gender', '$Department')";
                if(mysqli_query($conn, $sql)){
                    echo "Details entered successfully";
                    echo '<a href="table.php">Check entry</a>';
                }else{
                    echo "Something went wrong try again";
                }
            }else{
                echo "Details not uploaded";
            }
        }else{
            echo "That file is not allowed";
        }
    }
?>