<?php
session_start();
 
 if(!isset($_SESSION['username']))
	 header('location:http://localhost/project/login.php');
  $studentrollno=$_SESSION['username'];
  $scode=$_POST['scode'];
  $bcode=$_POST['bcode'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  
$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');

  $q="select * form attendance where studentrollno='$studentrollno' AND scode='$scode' AND bcode='$bcode' AND date='$from';";
  $result=mysqli_query($con,$q);
  $num1=mysqli_num_rows($result);


?>
<!DOCTYPE html>
    <html>
        <head>
            <title>StudentViewAttendance</title>
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
		<table width="500" height="200" align = "center"  bgcolor ="blue"border="1px" cellspacing="5" cellpadding="5">
		<tr>
				<th align="left"> <font size="20">Your Attendance :</font>
					<table bgcolor="lightblue" border="1px" width="480" height="180" size="22">
				<tr>
							  <th>Roll No</th>
							  <th>Subject Code</th>
							  
							  <th>Branch Code </th>
							  
							  <th>From </th>
							  <th>To </th>
							  <th>Attendance</th>
				</tr>
				<tr>
								
								<td><?php echo $studentrollno;?> </td>
								<td><?php echo $scode;?> </td>
								
								<td><?php echo $bcode;?> </td>
								<td><?php echo $from;?> </td>
								<td><?php echo $to;?> </td>
								<td><?php echo $num1;?> </td>
				</tr>
			</table>
				</th>
		</tr>
		</table>
		</form>
		</body>

			 
			 
			 </body>
		</html>
