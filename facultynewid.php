<?php

session_start();
?>
<html>
    <head>
        <title>Faculty Form</title>
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

 
 <form name="Login" action="facultyformvalidation.php" method="POST"> 
    <table border="1px" bgcolor="lightblue" align ="center" width="70%" height="">	
		<tr>

            <th align="left">Faculty Information :-
			<table border="1px" bgcolor="lightblue" align ="center" width="95%" height="">
				<tr>
					<td>Faculty Name :</td>
					<td><input type="text"placeholder="Enter Name" name="fname"></td>
				</tr>
				<tr>
					<td>Faculty Id :</td>
					<td><input type="text"placeholder="Enter Faculty Id" name="fid"></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td><input type="radio" value="Male" name="gender"/>Male<input type="radio" value="Female" name="gender"/>Female</td>
				</tr>
				<tr>
				<td>Mobile Number:</td>
				<td><input type="number" placeholder="Enter 10 digit M.no."name="mobileno" /></td>
				</tr>
				<tr>
					<td>E-mail :</td>
					<td><input type="mail"placeholder="Enter E-mail" name="email"></td>
				</tr>
				<tr>
				<td>Address :</td>
				<td><input type="text" placeholder="Enter Address" name="address" /></td>
				</tr>
				<tr>
				<td>Degree :</td>
				<td><input type="text" placeholder="Enter Your Education" name="degree" /></td>
				</tr>
				<tr>
				<td>Password :</td>
				<td><input type="password" name="password" /></td>
				</tr>
				<tr>
				<td>College Code :</td>
				<td><input type="text" placeholder="Enter code" name="ccode" /></td>
				</tr>
				<tr>
				<td>Branch Code :</td>
				<td><input type="text" name="bcode" /></td>
				</tr>
			</table>
			</th>
		</tr>
		<tr>
			 <td><input type ="submit" value="REQUEST" name="request"/>
			
			 <input type ="button" value="CLOSE" name="close"/></td>
		</tr>
		</th>	
		</table>
		</th>
		</tr>
	</table>
	
</body>
</html>