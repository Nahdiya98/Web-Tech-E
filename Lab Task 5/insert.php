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

$Name = $_POST['name'];
$Buying_Price=$_POST['bprice'];
$Selling_Price=$_POST['sprice'];

$sql = "INSERT INTO product (id, Name, Buying_Price,Selling_Price) VALUES ('', '$Name','$Buying_Price','$Selling_Price')";

if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}
else
{
	echo 'inserted';
}
header("location: Table.php");

?>