<?php
$server="localhost";
$username="root";
$password="";
$dbname="adityaemp";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
	die("could not connected".mysqli_connect_error());
}
$name=$_POST['name'];
$eid=$_POST['id'];
$salary=$_POST['sal'];
$hra=($salary*5)/100;
$gross_sal=$salary+$hra;
$net_sal=$gross_sal-$salary/4;

$sql="insert into emp values('$name','$eid','$salary','$hra','$gross_sal','$net_sal')";
if(mysqli_query($conn,$sql)){
	echo " new record inserted successfully";
}else{
	echo "Sorry!error occured $sql".mysqli_error($conn);
}
mysqli_close($conn);
?>