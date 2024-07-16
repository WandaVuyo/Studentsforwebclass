<?php
     $conn = mysqli_connect("localhost","root","","cenict");
     if(!$conn){
         die("Connection Error");
     }
    $query = "select * from web";
    $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Entries</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url(./20240404_113420.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }

        .header{
            position: fixed;
            width: 100%;
            top: 20px;
            padding: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 26px;
            font-weight: 200;
        }

        .link{
            position: fixed;
            top: 130px;
            left: 85%;
        }

        .container{
            height: 550px;
            width: 100%;
        }

        .link a{
            color: black;
            font-size: 20px;
            text-decoration: none;
            font-weight: 600;
        }

        .link a:hover{
            color: purple;
            text-decoration: underline;
        }

        .table tr{
            background: white;
        }

        .table tr td{
            text-align: center;
        }

        .table .tr{
            text-align: center;
            background: black;
            color: white;
        }

        .table .tr td{
            height: 30px;
        }

        .table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 60px;
        }

        .table td{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
            <h2>STUDENTS IN THE WEB DESIGN AND DEVELOPMENT CLASS</h2>
        </div>
        <div class="link">
            <a href="form.php">Enter new student</a>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr class="tr">
                                <td> Serial Number </td>
                                <td> Profile Picture </td>
                                <td> Last Name </td>
                                <td>  First Name</td>
                                <td> Reg Number </td>
                                <td> Phone Number </td>
                                <td> Gender </td>
                                <td> Department </td>
                            </tr>
                            <tr>
                                <?php
                                    $i = 1;
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                <td><?php echo $i++;?></td>
                                <td><?php $fileName = $row["ProfilePic"];
                                $imageUrl = "uploads/".$fileName;
                                echo "<img src='$imageUrl' alt='Profile Picture' 
                                style='width:60px;height:60px;border-radius:60px;'>";?></td>
                                <td><?php echo $row['Lname'];?></td>
                                <td><?php echo $row['Fname'];?></td>
                                <td><?php echo $row['RegNumber'];?></td>
                                <td><?php echo $row['PhoneNumber'];?></td>
                                <td><?php echo $row['Gender'];?></td>
                                <td><?php echo $row['Department'];?></td>
                            </tr> 
                                <?php
                                    }
                                ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>