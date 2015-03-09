<?php
include('connection.php');


$id=$_POST['id'];

$mysqli->select_db('Registration');

$query = "DELETE FROM Registration.Contenziosos where Id ='$id'";
$result = $mysqli->query($query);

if ($result) {

    echo "<div style='text-align: center'> <h2 >Your cause was deleted</h2></br>

               <a href=\"modifyTable.php\">modifyTable.php</a>
                </div>
            ";

} else {
    echo $mysqli->error . "</br>";

}
