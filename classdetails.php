<?php
 session_start();
 ?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>classdetails</title>
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

		<form name="Attendance" action="attendanceform.php" method="POST"> 
		<table width="500" height="200" align = "center"  bgcolor ="blue"border="1px" cellspacing="5" cellpadding="5">
		<tr>
				<th align="left"> <font size="20">Enter Details :</font>
					<table bgcolor="lightblue" border="1px" width="480" height="180" size="22">
				<tr>
							  <th>Faculty Id </th>
							  <th>Subject Code</th>
							  <th>Class No. </th>
							  <th>Branch Code </th>
							  <th>Semester </th>
							  <th>Date </th>
				</tr>
				<tr>
								<td><input type="text" name="fid"/></td>
								<td><input type="text" name="scode"/></td>
								<td><input type="number" name="classno" /></td>
								<td><input type="text" name="bcode" /></td>
								<td><input type="number" name="semester" /></td>
								<td><input type="date" name="date" /></td>
							</tr>
							<tr><td colspan="5"><input type="submit" value="SUBMIT"/>
			</table>
				</th>
		</tr>
		</table>
		</form>
		</body>
</html>
