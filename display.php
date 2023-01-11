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
<?php
   
$servername = "localhost";
$username ="root";
$pass = "";
$dbname ="studentinfosystem"; 
$conn = mysqli_connect($servername,$username,$pass,$dbname);
// if(!$conn){
//     echo "faild";
// }
// else{
//     echo "successfull";
// }
$studentid = 0;
$studentid = $_POST["studentid"];

$sql = "SELECT * FROM student where studentid = $studentid;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// echo "student name = ".$row['firstname'];


    $firstname=$middlename=$lastname=$fathername=$mothername=$birthdate=$sex=$class=$country=$statename=$districtname=$street=$department=$stadyyear="";


if($row){
    $firstname = $row["firstname"];
    $middlename = $row["middlename"];
    $lastname = $row["lastname"];
    $fathername = $row["fathername"];
    $mothername = $row["mothername"];
    $birthdate = $row["birthdate"];
    $sex = $row["sex"];
    
    $class = $row["class"];
    $country = $row["country"];
    $statename = $row["statename"];
    $districtname = $row["districtname"];
    $street = $row["street"];
    $department = $row["department"];
    $stadyyear = $row["stadyyear"];
}else{
    $firstname = "";
    $middlename = "";
    $lastname = "";
    $fathername = "";
    $mothername = "";
    $birthdate = "";
    $sex = "";
    
    $class = "";
    $country = "";
    $statename = "";
    $districtname = "";
    $street = "";
    $department = "";
    $stadyyear = "";
}




?>
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="studentid">
                   Student ID
                   <input type="text" name="studentid" id="studentid" placeholder="000000">
                   <div class="getbtn">   
                       <input  type="submit" value="get">
                    </div>
                </div>
            <div class="insertContainer">
                <div class="personalInfo">
                    <div class="inputbox">
                        <label class="lable" for="fname">First Name</label class="lable">
                        <input type="text" name="fname" id="fname" disabled value="<?php echo "$firstname";?>">
                    </div>
                    
                    <div class="inputbox">
                        <label class="lable" for="mname">Middle Name</label class="lable">
                        <input type="text" name="mname" id="mname" disabled value="<?php echo "$middlename";?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="lname">Last Name</label class="lable">
                        <input type="text" name="lname" id="lname" disabled value="<?php echo "$lastname";?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="faname">Father Name</label class="lable">
                        <input type="text" name="faname" id="faname" disabled value="<?php echo "$fathername";?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="moname">Mother Name</label class="lable">
                        <input type="text" name="moname" id="moname" disabled value="<?php echo "$mothername";?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="dob">Birthdate</label class="lable">
                        <input type="text" name="dob" id="dob" disabled value="<?php echo "$birthdate";?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="sex">Sex</label class="lable">
                        <input type="text" name="sex" id="sex" disabled value="<?php echo "$sex";?>">
                    </div>

                </div>
                <div class="extrainfor">
                    <div class="inputbox">
                        <label class="lable" for="cls">Class</label class="lable">
                        <input type="text" name="cls" id="cls" disabled value="<?php echo "$class";?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="cntry">Country</label class="lable">
                        <input type="text" name="cntry" id="cntry" disabled value="<?php echo "$country";?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="stat">State</label class="lable">
                        <input type="text" name="stat" id="stat" disabled value="<?php echo "$statename"; ?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="dict">District</label class="lable">
                        <input type="text" name="dict" id="dict" disabled value="<?php echo "$districtname";?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="strt">street</label class="lable">
                        <input type="text" name="strt" id="strt" disabled value="<?php echo "$street";?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="dpmt">Department</label class="lable">
                        <input type="text" name="dpmt" id="dpmt" disabled value="<?php echo "$department";?>">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="year">Year</label class="lable">
                        <input type="text" name="year" id="year" disabled value="<?php echo "$stadyyear";?>">
                    </div>


                </div>

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