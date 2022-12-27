<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sis.css">
    <title>Student Information System</title>
</head>
<body>
    <header>
        <div class="banner">
            STUDENT INFORMATION SYSTEM
        </div>
        <div class="navbar">
            <ul>
                <li><a href="/StudentInformaionSystem/Studentinformationsystem.php">Home</a></li>
                <li><a href="/StudentInformaionSystem/galley.php">Gallery</a></li>
                <li><a href="/StudentInformaionSystem/insert.php">Insert Record</a></li>
                <li><a href="/StudentInformaionSystem/display.php">Display Record</a></li>
                <li><a href="/StudentInformaionSystem/update.php">Update Record</a></li>
                <li><a href="/StudentInformaionSystem/delete.php">Delete Record</a></li>
            </ul>
        </div>
        <div class="marquee">
            <marquee>Welcome to student information system</marquee>
        </div>
    </header>
    <main>
        <div class="hero">
            <form action="#" method="post">
                <div class="studentid">
                   Student ID
                   <input type="text" name="" placeholder="000000">
                </div>
            <div class="insertContainer">
                <div class="personalInfo">
                    <div class="inputbox">
                        <label class="lable" for="fname">First Name</label class="lable">
                        <input type="text" name="fname" id="fname" placeholder="kamlesh">
                    </div>
                    
                    <div class="inputbox">
                        <label class="lable" for="mname">Middle Name</label class="lable">
                        <input type="text" name="mname" id="mname" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="lname">Last Name</label class="lable">
                        <input type="text" name="lname" id="lname" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="faname">Father Name</label class="lable">
                        <input type="text" name="faname" id="faname" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="moname">Mother Name</label class="lable">
                        <input type="text" name="moname" id="moname" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="dob">Birthdate</label class="lable">
                        <input type="text" name="dob" id="dob" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="sex">Sex</label class="lable">
                        <input type="text" name="sex" id="sex" placeholder="kamlesh">
                    </div>

                </div>
                <div class="extrainfor">
                    <div class="inputbox">
                        <label class="lable" for="cls">Class</label class="lable">
                        <input type="text" name="cls" id="cls" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="cntry">Country</label class="lable">
                        <input type="text" name="cntry" id="cntry" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="stat">State</label class="lable">
                        <input type="text" name="stat" id="stat" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="dict">District</label class="lable">
                        <input type="text" name="dict" id="dict" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="strt">street</label class="lable">
                        <input type="text" name="strt" id="strt" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="dpmt">Department</label class="lable">
                        <input type="text" name="dpmt" id="dpmt" placeholder="kamlesh">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="year">Year</label class="lable">
                        <input type="text" name="year" id="year" placeholder="kamlesh">
                    </div>


                </div>

            </div>
            
                <div class="submitbox">
                    <input type="submit" value="update">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="footerbody">

            <div class="info">
                Student information system
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="/StudentInformaionSystem/Studentinformationsystem.php">Home</a></li>
                    <li><a href="/StudentInformaionSystem/galley.php">Gallery</a></li>
                    <li><a href="/StudentInformaionSystem/insert.php">Insert Record</a></li>
                    <li><a href="/StudentInformaionSystem/display.php">Display Record</a></li>
                    <li><a href="/StudentInformaionSystem/update.php">Update Record</a></li>
                    <li><a href="/StudentInformaionSystem/delete.php">Delete Record</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
</body>
</html>