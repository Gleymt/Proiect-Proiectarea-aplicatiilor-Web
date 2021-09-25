<?php

require_once "config.php";

// Attempt insert query execution
$id = mysqli_real_escape_string($link, $_REQUEST['idc']);
$sql = "SELECT * FROM clienti where idclient= '$id'";

echo " ";
echo " ";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=2 style=\"width:600px; line-height:40px; margin-left: auto; margin-right: auto;\">";
            echo "<tr style=\"background-color:#1B63FF\">>";
                echo "<th>ID</th>";
                echo "<th>Nume</th>";
                echo "<th>Prenume</th>";
                echo "<th>CNP</th>";
                echo "<th>Serie</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td style=\"background-color:#B7DCFF\">>" . $row['idclient'] . "</td>";
                echo "<td style=\"background-color:#B7DCFF\">>" . $row['nume_cli'] . "</td>";
                echo "<td style=\"background-color:#B7DCFF\">> " . $row['prenume_cli'] . "</td>";
                echo "<td style=\"background-color:#B7DCFF\">>" . $row['cnp_cli'] . "</td>";
                echo "<td style=\"background-color:#B7DCFF\">>" . $row['serie_cli'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Nu am gasit datele cautate.";
    }
} else{
    echo "ERROR: Could not to execute $sql. " . mysqli_error($link);
}


$sql = "SELECT * FROM tranzactii where idclient= '$id'";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1 style=\"width:600px; line-height:40px; margin-left: auto; margin-right: auto;\">";
            echo "<tr style=\"background-color:#1B63FF\">>";
                echo "<th>ID Tranzactie</th>";
                echo "<th>ID Client</th>";
                echo "<th>Suma Primita</th>";
                echo "<th>Suma Oferita</th>";
                echo "<th>Data Tranzactiei</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td style=\"background-color:#B7DCFF\">>" . $row['idtranz'] . "</td>";
                echo "<td style=\"background-color:#B7DCFF\">>" . $row['idclient'] . "</td>";
                echo "<td style=\"background-color:#B7DCFF\">>" . $row['sumaprimita'] . "</td>";
                echo "<td style=\"background-color:#B7DCFF\">>" . $row['sumaoferita'] . "</td>";
                echo "<td style=\"background-color:#B7DCFF\">>" . $row['datatranzactiei'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Nu am gasit datele cautate.";
    }
} else{
    echo "ERROR: Could not to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?><?phptable>



<!DOCTYPE html>
<html lang="en">
<h1></h1>
<body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align:center; }
    </style>
    <div class="wrapper">
       <p><a class="btn btn-primary" href="welcome.php">Intoarcere la pagina principala.</a>.</p>  
    </div>    
</body>
</html>