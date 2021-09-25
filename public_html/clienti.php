<?php
// Initialize the session
session_start();
 

//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//    header("location: login.php");
//    exit;
//}
 

require_once "config.php";
$sql = "SELECT * FROM clienti";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1 style=\"width:600px; line-height:40px; margin-left: auto; margin-right: auto; padding:2\">";
            echo "<tr style=\"background-color:#1B63FF\">";
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
                echo "<td style=\"background-color:#B7DCFF\">>" . $row['prenume_cli'] . "</td>";
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
 
// Close connection
mysqli_close($link);
?><?phptable>


<!DOCTYPE html>
<html lang="en">
<body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align:center; }
    </style>
    <div class="wrapper">
        <h2>Gestionarea clientilor</h2>
        <p>Alegeti ce actiuni doriti sa efectuati:</p
        <p><a href="adaugareclienti.php" class="btn btn-primary">Adaugare client</a><p>
        <p><a href="stergereclient.php" class="btn btn-primary">Stergere client</a><p>
        <p><a href="welcome.php" class="btn btn-primary">Pagina principala</a><p>
    </div>    
</body>
</html>