<html>
<head>
    <title>info retrival</title>
</head>
<body>
    <form method="POST">
    <h1>Employee information retrival</h1>
    employee id:<input type="text" name="id"><br><br>
    <input type="submit" value="search" name="search">
    </form>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adityaemp";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
 {
    die("Connection failed: " . mysqli_connect_error());
}
$emid=$_POST['id'];
$sql="Select * from emp where $emid=eid";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo "employee:  ".$row["eid"]."<br>"."Name:  ".$row["name"]."<br>"."salary:  ".$row["salary"]."<br>"."hra:  ".$row["hra"]."<br>"."Gross salary:  ".$row["gross_sal"]."<br>"."Net salary:  ".$row["net_sal"];

    }

}
else{
    echo "0 results";
}
mysqli_close($conn);
?>
</html>