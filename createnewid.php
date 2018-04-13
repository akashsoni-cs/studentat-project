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
        <title>Create New Id</title>
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

        <table border="1px" align="center" width="200" height="300">
            <tr>
                <th>User Type
				<table border="1px" align="center" width="180" height="280">
					<tr><td><a href="studentform.php" ><button>Student</button></a></td></tr>
					<tr><td><a href="facultynewid.php" ><button>Faculty</button></a></td></tr>
					<tr><td><a href="hoinewid.php" ><button>Higher Department</button></a></td></tr>
					<tr><td><a href="parentnewid.php" ><button>Parents</button></a></td></tr>
				</table>
				</th>
            </tr>
        </table>
    </body>
</html>
