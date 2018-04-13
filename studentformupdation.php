<?php 
session_start();
$studentname=$_POST['studentname'];
$studentrollno=$_POST['studentrollno'];
$fathersname=$_POST['fathersname'];
$mothersname=$_POST['mothersname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

$cast=$_POST['cast'];
$address=$_POST['address'];
$mobileno=$_POST['mobileno'];
$parentsno=$_POST['parentsno'];
$email=$_POST['email'];
$studentpicture=$_POST['studentpic'];
$ccode=$_POST['collegecode'];
$cname=$_POST['collegename'];
$bcode=$_POST['coursecode'];
$bname=$_POST['coursename'];
$duration=$_POST['duration'];
$admissiondate=$_POST['admissiondate'];
$semester=$_POST['semester'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$con = mysqli_connect('localhost:3309','root','');
mysqli_select_db($con,'c_db');
$q = "insert into student(studentname,studentrollno,fathersname,mothersname,dob,gender,cast,address,mobileno,parentsno,studentpicture,email,ccode,bcode,bname,duration,admissiondate,semester,password) 
values('$studentname','$studentrollno','$fathersname','$mothersname','$dob','$gender','$cast','$address','$mobileno','$parentsno','$studentpicture','$email','$ccode','$bcode','$bname','$duration','$admissiondate',$semester,'$password');";
 mysqli_query($con,$q); 
mysqli_close($con);
?>