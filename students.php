<?php
session_start();
 
 if(!isset($_SESSION['username']))
	 header('location:http://localhost/project/login.php');
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Students</title>
			<link rel="stylesheet" href="login.css" />
			<style>
			a
			{text-decoration:none;}
			</style>
        </head>
        <body>
            <div  bgcolor="lightblue" >
                <font size="12">Goverment Polytechnic College Katni</font><br/>
                <font size="24">Behind Distric Jail Jhinjhri,<br/>Katni 483501 (M.P.)</font>
			</div>
			<div id="indiv" width="100" height="20" >
			 <a href="home.php"><button>HOME</button></a>
			 <a href="facultylogin.php"><button>ATTENDANCE</button></a>
			 <a href="higherdep.php"><button>HOI</button></a>
			 <a href="faculties.php"><button>FACULTIES</button></a>
			 <a href="students.php"><button>STUDENTS</button></a>
			 <a href="contacts.php"><button>CONTACTS</button></a>
			 <a href="aboutus.php"><button>ABOUT US</button></a>
			 <a href="logout.php" align="right"><button>LOGOUT</button></a>
			 </div><br/><br/>
			<div style="background-color:white;">
			<font size="18">
			<ul>
			<li><a href="studentform.php">Fill Student Form</a></li>
			<li><a href="viewattendance1.php">View Attendance</a></li>
			</font>
			</div>

			 </body>
		</html>

