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
$id = $_POST['id'];
$Name = $_POST['name'];
$Buying_Price=$_POST['bprice'];
$Selling_Price=$_POST['sprice'];

$sql = "Update product SET Name = '$Name', Buying_Price = '$Buying_Price', Selling_Price = '$Selling_Price' WHERE id = '$id' ";

if(!mysqli_query($con,$sql))
{
	echo 'Not Edited';
}
else
{
	echo 'Edited';
}

