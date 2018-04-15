<?php 
session_start();
$fname=$_POST['fname'];
$fid=$_POST['fid'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobileno=$_POST['mobileno'];
$gender=$_POST['gender'];

$degree=$_POST['degree'];
$password=$_POST['password'];
$ccode=$_POST['ccode'];
$bcode=$_POST['bcode'];
$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');

$q = "insert into facultytemp(fid,fname,gender,email,mobileno,address,degree,password,ccode,bcode) values('$fid','$fname','$gender','$email','$mobileno','$address','$degree','$password','$ccode','$bcode');";
mysqli_query($con,$q); 
mysqli_close($con);

?>
<!DOCTYPE html>
<html>

	<head>
		<title>FacultyRequest</title>
		<link rel="stylesheet" href="login.css"/>
	</head>
	<body>
	<div>
                <font size="12">Goverment Polytechnic College Katni</font><br/>
                <font size="24">Behind Distric Jail Jhinjhri,<br/>Katni 483501 (M.P.)</font>
			</div>
			<div id="indiv" width="100" height="20" >
			 <a href="home.php"><button>HOME</button></a>
			 <a href="attendance.php"><button>ATTENDANCE</button></a>
			 <a href="faculty.php"><button>FACULTIES</button></a>
			 <a href="students.php"><button>STUDENTS</button></a>
			 <a href="contacts.php"><button>CONTACTS</button></a>
			 <a href="aboutus.php"><button>ABOUT US</button></a>
			 <a href="logout.php" align="right"><button>LOGOUT</button></a>
			</div><br/><br/>

<table width="70%" height="" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			 <tr><td colspan="2">Dear<?php echo $fname;?>,Your Request Is Submitted,,,,</td></tr>
			 <td align="center"><a href="home.php"><button>CLOSE</button></a></td>
			 
			</table>
	</body>
	</html>
