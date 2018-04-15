<?php 
session_start();
$studentname=$_POST['studentname'];
$studentrollno=$_POST['studentrollno'];
$fathersname=$_POST['fathersname'];
$mothersname=$_POST['mothersname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$studentname=$_POST['studentname'];
$cast=$_POST['cast'];
$address=$_POST['address'];
$mobileno=$_POST['mobileno'];
$parentsno=$_POST['parentsno'];
$email=$_POST['email'];
$studentpicture=$_POST['studentpic'];
$ccode=$_POST['collegecode'];
$cname=$_POST['collegename'];
$bcode=$_POST['coursecode'];
$bname=$_POST['coursename'];
$duration=$_POST['duration'];
$admissiondate=$_POST['admissiondate'];
$semester=$_POST['semester'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');

	$q ="insert into student(studentrollno,studentname,fathersname,mothersname,dob,gender,cast,address,mobileno,parentsno,studentpicture,email,ccode,bcode,bname,duration,admissiondate,semester,password) values('$studentrollno','$studentname','$fathersname','$mothersname','$dob','$gender','$cast','$address','$mobileno','$parentsno','$studentpicture','$email','$ccode','$bcode','$bname','$duration','$admissiondate',$semester,'$password');";
 
	mysqli_query($con,$q);
	mysqli_close($con);
 
?>
<!DOCTYPE html>
<html>

	<head>
		<title>StudentSubmission</title>
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
			 <a href="addclass.php"><button>ADD CLASS</button></a>
			 <a href="studentform2.php"><button>ADD STUDENTS</button></a>
			 <a href="viewattendance.php"><button>VIEW ATTENDANCE </button></a>
			 <a href="contacts.php"><button>CONTACTS</button></a>
			 <a href="aboutus.php"><button>ABOUT US</button></a>
			 <a href="logout.php" align="right"><button>LOGOUT</button></a>
			</div><br/><br/>

<table width="70%" height="" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			 <tr><td colspan="2">Dear<?php echo $studentname;?>,Is Added,,,,</td></tr>
			 <td align="center"><a href="home.php"><button>CLOSE</button></a></td>
			 
			</table>
	</body>
	</html>
