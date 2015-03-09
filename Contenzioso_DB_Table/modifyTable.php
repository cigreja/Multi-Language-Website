<?php

include("connection.php");

?>
<head xmlns="http://www.w3.org/1999/html">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div id="form-container">
<table id ="form">
    <th>
    <fieldset class ="update-table">
        <legend><h3>UPDATE TABLE FORM</h3></legend>
        <form action="addNewRowDB.php" method="POST">
            <p>
                <span>ID</span>
                <input type="text" name="id" class="id">
                <span>Causa</span>
                <input type="text" name="causa" class="causa">

            <span>Materia</span>
                <input type="text" name="materia" class="form-Materia">
            </p>
            <p><span>Argomento</span>
                <input type="text" name="argomento" class="form-Argomento">

            <span>Settore</span>
                <input type="text" name="settore" class="form-Settore">

                <span>Gruppo</span>
                <input type="text" name="gruppo" class="form-Gruppo">
            </p>
            <p><span>ArgomentoOri</span>
                <input type="text" name="argomentoOri" class="form-ArgomentoORi">
            </p>
            <div>
                <button id="update" type="submit">Update</button>
            </div>
        </form>
    </fieldset>
    </th>
    <th>
    <fieldset class ="delete-row">
        <legend><h3>DELETE ROW</h3></legend>
        <form action="deleteRow.php" method="POST" >

            <div>
                <p><span>ID</span>
                    <input type="text" name="id">
                <button id="delete" type="submit">Delete</button>

                <div>
                </p>
            </div>
        </form>
    </fieldset>
    </th>
</table>
</div>
<div id ="table-container">
<table class="table_complete">
    <tr>
        <th class="id">Id</th>
        <th class="causa">Cause</th>
        <th class="materia">Materia</th>
        <th class="argomento">argomento</th>
        <th class="settore">settore</th>
        <th class="gruppo">Gruppo</th>
        <th class="argomentoOri">ArgomentoOri</th>
    </tr>

    <?php

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td class=\"id\">" . $row['Id'] . "</td>";
        echo "<td class=\"causa\">" . $row['Causa'] . "</td>";
        echo "<td class=\"materia\">" . ($row['Materia']) . "</td>";
        echo "<td class=\"argomento\">" . $row['Argomento'] . "</td>";
        echo "<td class=\"settore\">" . $row['Settore'] . "</td>";
        echo "<td class=\"gruppo\">" . $row['Gruppo'] . "</td>";
        echo "<td class=\"argomentoOri\">" . $row['ArgomentoOri'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
    ?>
</table>
</div>
</body>




