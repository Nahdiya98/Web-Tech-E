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

$sql = "DELETE FROM product WHERE id = '$id' ";

if(!mysqli_query($con,$sql))
{
	echo 'Not DELETED';
}
else
{
	echo 'DELETED';
}
