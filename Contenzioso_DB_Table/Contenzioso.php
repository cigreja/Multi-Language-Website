<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Contenzioso</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/contenzioso.css">
</head>
<body>
<div id="contenzioso-container">
    <table width="750" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align=center>
                <img src="images/attivita_gcom.gif" width=500 height=35 border=0 alt="attività">
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="3" cellpadding="3">
        <tr>
            <td class="corpopiccolo">
                Elenco delle cause patrocinate dai Partner dello Studio davanti alla Corte di giustizia dellUnione
                europea

                <br>
                <br><u> Come liberi professionisti:</u>(W. VISCARDINI con, a seconda dei casi, G. DONÀ, S. DONÀ)
                <br>
                <br>
            </td>
        </tr>
    </table>
    <table id="contenzioso-table">
        <tr>
            <th class="causa">Cause</th>
            <th class="materia">Materia</th>
            <th class="argomento">argomento</th>
            <th class="settore">settore</th>
        </tr>

        <?php

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td class=\"causa\">" . $row['Causa'] . "</td>";
            echo "<td class=\"materia\">" . ($row['Materia']) . "</td>";
            echo "<td class=\"argomento\">" . $row['Argomento'] . "</td>";
            echo "<td class=\"settore\">" . $row['Settore'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($con);
        ?>
        <br>
        <br>
        <table border=0 width=750 cellspacing=5 cellpading=0>
            <tr>
                <td class=notabene>
                    Note Bene:
                    <br>
                    <u>Per questioni di riservatezza</u> (in particolare, <u>per evitare lidentificazione della
                        clientela</u>), <u>per ciascuna causa è stata omessa lindicazione del numero del ruolo
                        generale</u> (figurante prima dellanno: /anno).
                    <br>
                    <br>Per ciascuna causa sono invece riportati:
                    <br>la lettera T che indica i procedimenti davanti al Tribunale (fino al 30 novembre 2009 chiamato
                    Tribunale di primo grado);
                    <br>la lettera C (o senza lettera) che indica i procedimenti davanti alla Corte di giustizia;
                    <br>la lettera P che indica il procedimento dappello davanti alla Corte di giustizia avverso le
                    decisioni del Tribunale;
                    <br>lanno di radicamento della causa;
                    <br>la materia trattata con eventuali precisazioni.
                </td>
            </tr>
        </table>

</body>

</html>

