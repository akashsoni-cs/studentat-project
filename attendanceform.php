<?php
 session_start();



$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');

$fid =$_POST['fid'];
$bcode=$_POST['bcode'];
$scode=$_POST['scode'];
$semester =$_POST['semester'];
$date =$_POST['date'];
$classno = $_POST['classno'];


$q1= "select * from teaching where scode='$scode' AND bcode= '$bcode'AND session=2018;";
$result1 = mysqli_query($con,$q1);
$vfid=mysqli_fetch_array($result1);
if($fid!=$vfid['fid'])
{
		header('location:http://localhost/project/classdetails.php');
		
}

else
{
	
	$q2 = "select studentrollno from studentsubject where scode='$scode' AND semester='$semester';";
	$result2= mysqli_query($con,$q2);
	$num1=mysqli_num_rows($result2);	
?>

<!DOCTYPE html>
<html>

	<head>
		<title>AttendanceForm</title>
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
<table width="70%" height="	" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
	<tr>
            <th align="left"> <font size="20"> Details :</font>
                <table bgcolor="lightblue" border="1px" width="98%" height="100%" size="22">
			<tr>
						  <th>Faculty Id </th>
                          <th>Subject Code</th>
                          <th>Class No. </th>
						  <th>Branch Code </th>
                          <th>Semester </th>
                          <th>Date </th>
			</tr>
			<tr>
                            <td><?php echo $fid;?></td>
                            <td><?php echo $scode;?></td>
                            <td><?php echo $classno;?></td>
							<td><?php echo $bcode;?></td>
                            <td><?php echo $semester;?></td>
                            <td><?php echo $date;?></td>
            </tr>
                     
		</table>
            </th>
	</tr>
	</table>
	
	`<form action="attendancesubmission.php" method="POST">
		<input type="hidden" value="<?php echo $fid;?>" name="fid"/>
		<input type="hidden" value="<?php echo $scode;?>" name="scode"/>
		<input type="hidden" value="<?php echo $classno;?>" name="classno"/>
		<input type="hidden" value="<?php echo $bcode;?>" name="bcode"/>
		<input type="hidden" value="<?php echo $semester;?>" name="semester"/>
		<input type="hidden" value="<?php echo $date;?>" name="date"/>
		<input type="hidden" value="<?php echo $num1;?>" name="num"/>
		<table width="70%" height="100%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			<tr>
				<th>Serial No.</th>
				<th>Roll No.</th>
				<th>Student Name </th>
				<th>Attendance</th>
				<th>Persent</th>
			</tr>
			<?php
				for($i=1;$i<=$num1;$i++)
				{ 
					$row1=mysqli_fetch_array($result2);
					$temp =  $row1['studentrollno'];
					$q3="select * from student where studentrollno='$temp'";
					$studentdt=mysqli_query($con,$q3);
					
					$row1=mysqli_fetch_array($studentdt);
			?>
			<tr bgcolor="white">
				<td><?php echo $i; ?></td>
				<td><?php echo $row1['studentrollno']; ?></td>
				<td><?php echo $row1['studentname']; ?></td>
				<td><input type="checkbox" value="<?php echo $row1['studentrollno'];?>" 
				name="s<?php echo $i?>" /></td>
				<td></td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td colspan="5" align="center"><input type="submit" value="SUBMIT" /></td>
			</tr>
			
		</table>
	 </form>
	</body>
</html>


<?php
}
?>

<?php
mysqli_close($con);
?>