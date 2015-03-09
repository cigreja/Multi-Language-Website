<?php
include('connection.php');
$Id = $_POST['id'];
$causa = $_POST['causa'];
$materia = $_POST['materia'];
$argomento = $_POST['argomento'];
$settore = $_POST['settore'];
$industria = $_POST['industria'];
$gruppo= $_POST['gruppo'];
$argomentoOri=$_POST['argomentoOri'];


if (empty($causa) OR empty($materia) or empty($argomento) or empty($settore)) {

    echo "<a href=\"modifyTable.php\"></a><h4 style='color: red'>Error-All field need to be filled</h4>";

} else {

    $mysqli->select_db('Registration');

    $query = "INSERT INTO Registration.Contenziosos (Id,Causa, Materia, Argomento, Settore, Gruppo, ArgomentoOri) VALUES ('$Id','$causa','$materia','$argomento','$settore', '$gruppo', '$argomentoOri')";
    $result = $mysqli->query($query);

    if ($result) {

        echo "<div style='text-align: center'> <h2 >Your cause was added</h2></br>

               <a href=\"modifyTable.php\">modifyTable.php</a>
                </div>
            ";

    } else {
        echo $mysqli->error . "</br>";

    }

}