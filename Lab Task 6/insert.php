<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'pd'))
{
	echo 'Database not selected';
}

$firstname = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['telephone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$permanentaddress = $_POST['address'];
$presentaddress = $_POST['presentaddress'];
$city = $_POST['city'];
$state = $_POST['region'];
$password = $_POST['password'];
$confirmpassword = $_POST['password'];


$sql = "INSERT INTO reg (id, firstname,lastname,username,email,contact,dob,gender,permanentaddress,presentaddress,city,state,password,confirmpassword) VALUES ('', '$firstname','$lastname','$username','$email','$contact','$dob','$gender','$permanentaddress','$presentaddress','$city','$state','$password','$confirmpassword')";

if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}
else
{
	echo 'inserted';
}


?>