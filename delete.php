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
    
<div id="loader">
        <div class="load"></div>
    </div>
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
            <div class="deleteContainer">
                <div class="personalInfo">
                    <div class="inputbox">
                        <label class="lable" for="fname">Student Name</label class="lable">
                        <input type="text" name="fname" id="fname" placeholder="kamlesh">
                    </div>
                    
                    
                </div>
                <div class="extrainfor">
                    <div class="inputbox">
                        <label class="lable" for="cls">Father Name</label class="lable">
                        <input type="text" name="cls" id="cls" placeholder="kamlesh">
                    </div>

                    


                </div>

            </div>
            
                <div class="submitbox">
                    <input type="submit" value="delete">
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
    <script src="./app.js"></script>
</body>
</html>