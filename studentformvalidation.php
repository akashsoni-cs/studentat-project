<?php 
session_start();
echo $studentname=$_POST['studentname'];
echo$studentrollno=$_POST['studentrollno'];
echo$fathersname=$_POST['fathersname'];
echo$mothersname=$_POST['mothersname'];
echo$dob=$_POST['dob'];
echo$gender=$_POST['gender'];
echo$studentname=$_POST['studentname'];
echo$cast=$_POST['cast'];
echo$address=$_POST['address'];
echo$mobileno=$_POST['mobileno'];
echo$parentsno=$_POST['parentsno'];
echo$email=$_POST['email'];
echo$studentpicture=$_POST['studentpic'];
echo$ccode=$_POST['collegecode'];
echo$cname=$_POST['collegename'];
echo$bcode=$_POST['coursecode'];
echo$bname=$_POST['coursename'];
echo$duration=$_POST['duration'];
echo$admissiondate=$_POST['admissiondate'];
echo$semester=$_POST['semester'];
echo$password=$_POST['password'];
echo$repassword=$_POST['repassword'];
$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');

$q ="insert into studenttemp(studentrollno,studentname,fathersname,mothersname,dob,gender,cast,address,mobileno,parentsno,studentpicture,email,ccode,bcode,bname,duration,admissiondate,semester,password) values('$studentrollno','$studentname','$fathersname','$mothersname','$dob','$gender','$cast','$address','$mobileno','$parentsno','$studentpicture','$email','$ccode','$bcode','$bname','$duration','$admissiondate',$semester,'$password');";
 
 mysqli_query($con,$q);
 mysqli_close($con);
 
header('location:http://localhost/project/studenttemp.php');	

?>