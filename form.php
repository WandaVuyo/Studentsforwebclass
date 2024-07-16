<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                top: 0px;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .header p{
                font-size: 40px;
                font-weight: 600;
            }

            .container{
                width: 420px;
                background: white;
                border: 2px solid rgba(255, 255, 255, .2);
                box-shadow: 0 14px 28px black;
                color: #fff;
                border-radius: 10px;
                padding: 30px 40px;
                text-align: center;
                margin-top: 80px;
            }

            .container .form input{
                width: 100%;
                height: 30px;
                margin: 10px 0;
                border-radius: 10px;
                border: 2px solid black;
            }

            .container .form{
                text-align: left;
            }

            .container .entry{
                color: black;
                font-size: 25px;
                font-weight: 300;
                border: 2px solid black;
                background: skyblue;
                border-radius: 10px;
                margin-bottom: 10px;
            }

            .container .up{
                margin-top: 10px;
            }

            .container .up input{
                width: 60%;
                height: 25px;
                border-radius: 10px;
                border: 2px solid black;
                background: skyblue;
            }

            .container .up input:hover{
                background: white;
            }

            .container .table{
                margin-top: 10px;
            }

            .container .table a{
                color: black;
                text-decoration: none;
                font-weight: 600;
            }

            .container .table a:hover{
                color: purple;
                text-decoration: underline;
            }
            
            .form label{
                color: black;
            }

            .container label{
                color: black;
            }
        </style>
        <title>Entry Form</title>
    </head>
    <body>
        <header class="header">
            <p>Welcome!! Please fill out the form below for entry and check once uploaded.</p>
        </header>
        <div class="container">
            <div class="entry">
                <p>Entry Form</p>
            </div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form">
                    <label for="FirstName">First Name:</label>
                    <input type="text" class="control" name="Fname" placeholder="Maxwell" required>
                </div>
                <div class="form">
                    <label for="LastName">Last Name:</label>
                    <input type="text" class="control" name="Lname" placeholder="JOHNSON" required>
                </div>
                <div class="form">
                    <label for="RegNumber">Reg. Number:</label>
                    <input type="text" class="control" name="RegNumber" placeholder="BED/00/00/00" pattern="[BED/00/00/00]{4}" required>
                </div>
                <div class="form">
                    <label for="PhoneNumber">Phone Number:</label>
                    <input type="number" class="control" name="PhoneNumber" placeholder="0998672354" maxlength="10" required>
                </div>
                <div required>
                    <label for="gender">Select your gender:</label>
                    <label for="male" class="radio-inline"><input type="radio" name="Gender" value="M">Male</label>
                    <label for="female" class="radio-inline"><input type="radio" name="Gender" value="F">Female</label>
                    <label for="other" class="radio-inline"><input type="radio" name="Gender" value="O">Other</label>
                </div>
                <div class="form">
                    <label for="Department">Select the department:</label>
                    <input type="text" class="control" name="Department" list='scripts' placeholder="Computer Engineering or Education in ICT" required>
                    <datalist id='scripts'>
                        <option value='Computer Engineering'>
                        <option value='Education in ICT'>
                    </datalist>
                </div>
                <div>
                    <label for="upload">Upload profile image:</label>
                    <input type="file" name="ProfilePic" accept=".jpg, .jpeg, .png" style="color: black;" required>
                </div>
                <div class="up">
                    <input type="submit" class="btn" name="submit" value="Upload">
                </div>
                <div class="table">
                    <a href="table.php">Check Entries</a>
                </div>
            </form>
        </div>
    </body>
</html>