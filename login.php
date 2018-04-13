<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title >Login</title>
		<link rel="stylesheet" href="login.css"/>
    </head>
    <body>
	<form name="Login" action="loginvalidation.php" method="POST"> 
	<table width="300" height="300" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
	<tr>
	 <th align="left"> <font size="20"> Login</font>
	   <table bgcolor="white" width="280" height="280">
	   <tr>
	    <td>
        
           <table size="22">
			<tr>
			  <td>Login Id : </td>
			  <td><input type="text" name="lid" placeholder ="Enter Login Id" /></td>
			 </tr>
			 <tr>
              <td>Password : </td>
			  <td><input type="password" name="lpassword" /></td>
             </tr>
			 <tr>
			  <td colspan="2" align = center  ><a href="createnewid.php" id="la">Create New Id...</a></td>
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
