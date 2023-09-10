<?php
$server="localhost";
$username="root";
$password="";
$conn=mysqli_connect($server,$username,$password);
if(!$conn)
{
	die("could not coonected".mysqli_connect_error());
}
echo "connected successfully";
$sql="create database adityaemp";
if(mysqli_query($conn,$sql))
{
echo "database created successfully";
}
else
{
echo "could not create database".mysqli_error($conn);
}

mysqli_close($conn);
?>