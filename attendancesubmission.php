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

$q2 = "select studentrollno from studentsubject where scode='$scode' AND semester='$semester';";
	$result2= mysqli_query($con,$q2);
	$num1=mysqli_num_rows($result2);
	
?>
<!DOCTYPE html>
<html>

	<head>
		<title>AttendanceSubmission</title>
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
                <table bgcolor="white" border="1px" width="98%" height="100%" size="22">
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
	<table width="70%" height="100%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			<tr>
				<th>Serial No.</th>
				<th>Roll No.</th>
				<th>Student Name </th>
				<th>Attendance</th>
				<th>Persent</th>
			</tr>
			<?php
						$i=1;
				while($i<=$num1)
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
					<?php
						
						$index="s".$i;
						$index1="a".$i;
						if(isset($_POST[$index]))
						{
							$studentrollno=$_POST[$index];
							
							$q ="insert into attendance(studentrollno,scode,date,classno) values('$studentrollno','$scode','$date',$classno);";
							mysqli_query($con,$q);
					?>
							<td><?php echo "P"?></td>
					<?php			
							
						}
						else
						{
							?>
							<td><?php echo "A"?></td>
							<?php
						}
						$studentrollno=$_POST[$index1];
						if(isset($studentrollno))
						{
							$q4="SELECT MAX(classno) FROM attendance WHERE scode='$scode';";
							$result4= mysqli_query($con,$q4);
							$row=mysqli_fetch_array($result4);
							$num4=$row['MAX(classno)'];

							$q5="select * from attendance where scode='$scode' and studentrollno='$studentrollno';";
							$result5=mysqli_query($con,$q5);
							$num5=mysqli_num_rows($result5);
							$per=($num5*100)/$num4;
						
						?>
							<td><?php echo $per."%" ;?></td>
					</tr>
			<?php
						}
				$i++;
				}
			?>
		</table>
			<table width="70%" height="100%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			 <tr><td colspan="2">Attendance Submitted,,,,</td></tr>
			 <tr><td><a href="viewattendance.php"><button>VEIW ATTENDANCE</button></a></td>
			 <td><a href="home.php"><button>CLOSE</button></a></td>
			 
			</table>
</body>
</html>

<?php
mysqli_close($con);
?>