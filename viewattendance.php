<?php
session_start();
 
 if(!isset($_SESSION['username']))
	 header('location:http://localhost/project/login.php');

 
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>VieAttendance</title>
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
			 <a href="attendance.php"><button>ATTENDANCE</button></a>
			 <a href="addclass.php"><button>ADD CLASS</button></a>
			 <a href="studentform2.php"><button>ADD STUDENTS</button></a>
			 <a href="viewattendance.php"><button>VIEW ATTENDANCE </button></a>
			 <a href="contacts.php"><button>CONTACTS</button></a>
			 <a href="aboutus.php"><button>ABOUT US</button></a>
			 <a href="logout.php" align="right"><button>LOGOUT</button></a>
			</div><br/><br/>
	
	<form name="Attendance" action="viewattendance2.php" method="POST"> 
		<table width="500" height="200" align = "center"  bgcolor ="blue"border="1px" cellspacing="5" cellpadding="5">
		<tr>
				<th align="left"> <font size="20">Enter Details :</font>
					<table bgcolor="lightblue" border="1px" width="480" height="180" size="22">
				<tr>
							  <th>Subject Code</th>
							  
							  <th>Branch Code </th>
							  <th>Semester </th>
							  
							  <th>From </th>
							  <th>To </th>
				</tr>
				<tr>
								
								<td><input type="text" name="scode"/></td>
								
								<td><input type="text" name="bcode" /></td>
								<td><input type="number" name="semester" /></td>
								<td><input type="date" placeholder="YYYY/MM/DD" name="from" /></td>
								<td><input type="date" placeholder="YYYY/MM/DD" name="to" /></td>
							</tr>
							<tr><td colspan="5"><input type="submit" value="SUBMIT"/>
			</table>
				</th>
		</tr>
		</table>
		</form>
		</body>

			 
			 
			 </body>
		</html>
