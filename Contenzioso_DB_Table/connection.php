<?php
$con=mysqli_connect("localhost","root","");
$mysqli= new mysqli("localhost","root","","Registration");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Registration.Contenziosos order by Id DESC");

?>

