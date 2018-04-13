<?php
session_start();
$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');
$q4= "select * from facultytemp;";
$result4= mysqli_query($con,$q4);
$num4 = mysqli_num_rows($result4);

?>
<!DOCTYPE html>
<html>

	<head>
		<title>FacultyFormValidation</title>
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
	<table border="1px" align="center">
		<tr>
			<th>Faculty Id </th>
			<th>Faculty Name</th>
			<th>Gender</th>
			<th>E-mail</th>
			<th>Mobile No.</th>
			<th>Address</th>
			<th>Degree</th>
			<th>Password</th>
			<th>Branch Code</th>
			<th>ADD</th>
			<th>VEIW</th>
			<th>DELETE</th>
		</tr>
<?php
	$i=1;
	while($i<=$num4)
	{
		$row4= mysqli_fetch_array($result4);
		
?>
	
		<tr>
			<form action="facultyformvalidation2.php" method="POST">
			<td><?php echo $row4['fid']; ?>
			<input type="hidden" name="fid" value="<?php echo $row4['fid']; ?>" /></td>
			<td><?php echo $row4['fname']; ?></td>
			<td><?php echo $row4['gender']; ?></td>
			<td><?php echo $row4['email'];?></td>
			<td><?php echo $row4['mobileno'];?></td>
			<td><?php echo $row4['address'];?></td>
			<td><?php echo $row4['degree'];?></td>
			<td><?php echo $row4['password'];?></td>
			<td><?php echo $row4['bcode'];?></td>
			<td><input type="submit" value="ADD" name="submit"/></td>
			<td><input type="submit" value="VEIW" name="submit"/></td>
			<td><input type="submit" value="DELETE" name="submit"/></td>
			</form>
			
		</tr>
<?php
	$i++;
	}
	
?>
	</table>
</body>
</html>

<?php
mysqli_close($con);
?>