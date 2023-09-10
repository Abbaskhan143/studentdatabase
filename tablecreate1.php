<?php
$server="localhost";
$username="root";
$password="";
$dbname="adityaemp";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
	die("could not coonected".mysqli_connect_error());
}
echo "connected successfully";
echo"<br>";
$sql="CREATE TABLE emp(
name varchar(10) PRIMARY KEY,eid VARCHAR(10) NOT NULL,salary varchar(15),hra int(10),gross_sal int(10),net_sal int(10)
)";

if(mysqli_query($conn,$sql))
{
echo "table created successfully";
}
else
{
echo "could not create table".mysqli_error($conn);
}

mysqli_close($conn);
?>