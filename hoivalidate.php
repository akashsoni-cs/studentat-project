<?php


session_start();

$hid = $_POST['hid'];
$password = $_POST['password'];

$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');

$q1= "select * from hoi where hid='$hid' AND password= '$password';";
$result1 = mysqli_query($con,$q1);
$num1 = mysqli_num_rows($result1);



if ($num1==1)
{
	$_SESSION['username']=$hid;
	header('location:http://localhost/project/facultytemp.php');
}
else
{
	header('location:http://localhost/project/higherdep.php');
}

?>

<?php
mysqli_close($con);
?>