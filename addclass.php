
<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <title>student form</title>
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
	<form name="Login" action="classsubmission.php" method="POST"> 
    <table border="1px" bgcolor="lightblue" align ="center" width="70%" height="">	
		<tr>

            <th align="left">Class Information :-
			<table border="1px" bgcolor="lightblue" align ="center" width="95%" height="">
				<tr>
					<td>Subject Code :</td>
					<td><input type="text"placeholder="Enter Subject Code" name="scode"></td>
				</tr>
				<tr>
					<td>Faculty Id :</td>
					<td><input type="text"placeholder="Enter Your Id" name="fid"></td>
				</tr>
				<tr>
					<td>Branch Code :</td>
					<td><input type="text"placeholder="Enter Branch Code" name="bcode"></td>
				</tr>
				<tr>
					<td>Semester :</td>
					<td><input type="text"placeholder="Enter Semester" name="semester"></td>
				</tr>
				<tr>
					<td>Session :</td>
					<td><input type="date" placeholder="DD/MM/YYYY" name="session"></td>
				</tr>
				<tr>
					<td><input type ="submit" value="SUBMIT" name="submit"/>
			
					<a href="home.php"><button>CLOSE</button></a></td>
				</tr>

			</table>
			</th>
		</tr>
	</table>
 
