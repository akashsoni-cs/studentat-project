<?php

session_start();

$lid = $_POST['lid'];
$lpassword = $_POST['lpassword'];

$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');

$q1= "select * from college where ccode='$lid' AND password= '$lpassword';";
$result1 = mysqli_query($con,$q1);
$num1 = mysqli_num_rows($result1);

$q2= "select * from faculty where fid='$lid' AND password= '$lpassword';";
$result2 = mysqli_query($con,$q2);
$num2 = mysqli_num_rows($result2);

$q3= "select * from student where Studentrollno='$lid' AND password= '$lpassword';";
$result3 = mysqli_query($con,$q3);
$num3 = mysqli_num_rows($result3);

$q4= "select * from hoi where hid='$lid' AND password= '$lpassword';";
$result4 = mysqli_query($con,$q4);
$num4 = mysqli_num_rows($result4);

$q5= "select * from person where pname='$lid' AND password= '$lpassword';";
$result5 = mysqli_query($con,$q5);
$num5 = mysqli_num_rows($result5);

if ($num1==1 || $num2==1 || $num3==1 || $num4==1 || $num5==1)
{
	$_SESSION['username'] = $lid;
	$_SESSION['upassword'] = $lpassword;
	header('location:http://localhost/project/home.php');
}
else
{
	header('location:http://localhost/project/login.php');
}

mysqli_close($con);

?>