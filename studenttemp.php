<?php
session_start();
$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');
$q4= "select * from studenttemp;";
$result4= mysqli_query($con,$q4);
$num4 = mysqli_num_rows($result4);

?>
<!DOCTYPE html>
<html>

	<head>
		<title>StudentRequest</title>
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
	
	<table width="70%" height="	" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
	<tr>
            <th align="left"> <font size="20"> Notifications :</font>

	<table width="98%" height="	" align = "center"  bgcolor ="white" border="1px" cellspacing="5" cellpadding="5"align="center">
		<tr>
			<th>Roll No.</th>
			<th>Student Name</th>
			<th>Gender</th>
			<th>Picture</th>
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
			<form action="studentformvalidation2.php" method="POST">
			<td><?php echo $row4['studentrollno']; ?>
			<input type="hidden" name="studentrollno" value="<?php echo $row4['studentrollno']; ?>" /></td>
			<td><?php echo $row4['studentname']; ?></td>
			<td><?php echo $row4['gender']; ?></td>
			<td><img src="<?php echo $row4['studentpicture'];?>" alt="image" /></td>
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
	</th>
	</tr>
	</table>
</body>
</html>

<?php
mysqli_close($con);
?>