<?php
 session_start();

$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');

$fid =$_POST['fid'];
$bcode=$_POST['bcode'];
$scode=$_POST['scode'];
$semester =$_POST['semester'];
$session =$_POST['session'];


$q1= "select * from subject where scode='$scode' AND bcode= '$bcode';";
$result1 = mysqli_query($con,$q1);
$vscode=mysqli_fetch_array($result1);
$q2="select fid from teaching where scode='$scode' AND bcode= '$bcode';";
$result2 = mysqli_query($con,$q2);
$vfid=mysqli_fetch_array($result2);
if($scode!=$vscode['scode'])
{
	header('location:http://localhost/project/addclass.php');	
}

else
{
	
		$q3="update subject set fid='$fid' where scode='$scode';";
		mysqli_query($con,$q3);
		if($fid==$vfid['fid'])
		{
			$q4="update teaching set session='$session' where fid='$fid';";
			mysqli_query($con,$q4);	
		}
		else
		{
			$q5="update teaching set fid='$fid',session='$session' where scode='$scode';";
			mysqli_query($con,$q5);
		}	

}


?>

<html>
    <head>
        <title>Class Submission </title>
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
			<table width="50%" height="20%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			 <tr><td colspan="2">Class is Added ,,,,</td></tr>
			 
			 <td><a href="home.php"><button>CLOSE</button></a></td>
			 
			</table>