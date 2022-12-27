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

<!-- <?php


$servername = "localhost";
$username ="root";
$pass = "";
$dbname ="studentinfosystem"; 
$conn = mysqli_connect($servername,$username,$pass,$dbname);


// $sql = "create database studentinfosystem";


// $sql = "CREATE TABLE student (studentid INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY ,firstname VARCHAR(30) NOT NULL,middlename VARCHAR(20) NOT NULL,lastname VARCHAR(20) NOT NULL, fathername VARCHAR(30) NOT NULL,mothername VARCHAR(30) NOT NULL,birthdate DATE NOT NULL,sex CHAR(1) NOT NULL,class VARCHAR(20) NOT NULL,country VARCHAR(10) NOT NULL,statename VARCHAR(20) NOT NULL,districtname VARCHAR(20) NOT NULL,street VARCHAR(50),department VARCHAR(20),stadyyear VARCHAR(10))";



$firstname= $middlename=$lastname=$fathername=$mothername=$birthdate=$sex=$class=$country=$statename=$districtname=$street=$department=$stadyyear="";
if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $firstname = test_input($_POST["fname"]);
    $middlename = test_input($_POST["mname"]);
    $lastname = test_input($_POST["lname"]);
    $fathername = test_input($_POST["faname"]);
    $mothername = test_input($_POST["moname"]);
    $birthdate = test_input($_POST["dob"]);
    $sex = test_input($_POST["sex"]);
    
    $class = test_input($_POST["cls"]);
    $country = test_input($_POST["cntry"]);
    $statename = test_input($_POST["stat"]);
    $districtname = test_input($_POST["dict"]);
    $street = test_input($_POST["strt"]);
    $department = test_input($_POST["dpmt"]);
    $stadyyear = test_input($_POST["year"]);
}
if($firstname=="" | $lastname=="" | $fathername=="" | $mothername=="" | $birthdate=="" | $sex=="" | $class=="" | $country=="" | $statename=="" | $districtname=="" | $street=="" | $department=="" | $stadyyear=="")
{
    $error = "Please enter something";
}
else{
    $sql = "INSERT INTO student VALUES ('','$firstname','$middlename','$lastname','$fathername','$mothername','$birthdate','$sex','$class','$country','$statename','$districtname','$street','$department','$stadyyear');";
    if(mysqli_query($conn,$sql))
    {
        // echo "inserted";
    }
    else {
        echo "faild";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
$sql = "SELECT * FROM student WHERE studentid = (SELECT MAX(studentid) FROM student);";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sid="";
if($row){
    $sid = $row["studentid"]+1;
}
else{
    $sid = "";
}



?> -->
    <header>
        <div class="banner">STUDENT INFORMATION SYSTEM</div>
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
            <!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> -->
            <form action="#" method="post">
            <div class="insertContainer">
                <div class="personalInfo">
                    <div class="inputbox">
                        <label class="lable" for="fname">First Name</label class="lable">
                        <input type="text" name="fname" id="fname">
                    </div>
                    
                    <div class="inputbox">
                        <label class="lable" for="mname">Middle Name</label class="lable">
                        <input type="text" name="mname" id="mname">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="lname">Last Name</label class="lable">
                        <input type="text" name="lname" id="lname">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="faname">Father Name</label class="lable">
                        <input type="text" name="faname" id="faname">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="moname">Mother Name</label class="lable">
                        <input type="text" name="moname" id="moname">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="dob">Birthdate</label class="lable">
                        <input type="text" name="dob" id="dob">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="sex">Sex</label class="lable">
                        <input type="text" name="sex" id="sex">
                    </div>

                </div>
                <div class="extrainfor">
                    <div class="inputbox">
                        <label class="lable" for="cls">Class</label class="lable">
                        <input type="text" name="cls" id="cls">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="cntry">Country</label class="lable">
                        <input type="text" name="cntry" id="cntry">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="stat">State</label class="lable">
                        <input type="text" name="stat" id="stat">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="dict">District</label class="lable">
                        <input type="text" name="dict" id="dict">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="strt">street</label class="lable">
                        <input type="text" name="strt" id="strt">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="dpmt">Department</label class="lable">
                        <input type="text" name="dpmt" id="dpmt">
                    </div>

                    <div class="inputbox">
                        <label class="lable" for="year">Year</label class="lable">
                        <input type="text" name="year" id="year">
                    </div>


                </div>

            </div>
            
                <div class="submitbox">
                    <input type="submit" onclick="showprompt()" id="submit" value="submit">
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

    <script>
        function showprompt(){
            
                // alert("Student ID : <?php echo "$sid" ?>");
                alert("Student ID : ");
            
        }
    </script>
</body>
</html>