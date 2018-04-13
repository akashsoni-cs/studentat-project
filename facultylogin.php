<?php
session_start();
if(!isset($_SESSION['username']))
	 header('location:http://localhost/project/login.php');

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
	<form name="FacultyLogin" action="facultyvalidation.php" method="POST"> 
	<table width="400" height="300" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
	<tr>
	 <th align="left"> <font size="20">Faculty Login</font>
	   <table bgcolor="white" width="380" height="280">
	   <tr>
	    <td>
        
           <table size="22" align=center>
			<tr>
			  <td>Faculty Id : </td>
			  <td><input type="text" name="facultyid" placeholder ="Enter Login Id" /></td>
			 </tr>
			 <tr></tr>
			 <tr>
              <td>Password : </td>
			  <td><input type="password" name="facultypassword" /></td>
             </tr>
			 <tr></tr>
			 <tr>
			  <td colspan="2" align = center  ><a href="createnewid.php" id="la">Create New Id...</a></td>
			 </tr>
			 <tr></tr>
			 <tr>
				<td colspan="2" align = center><input type="submit" value="Login" /></td>
			</tr>
			
            
            
        </td>
		</tr>
		</table>
	</th>
	</tr>
	</table>
	</form>
    </body>
</html>
