<?php

require_once "config.php";

// Attempt insert query execution
$id = mysqli_real_escape_string($link, $_REQUEST['numec']);
$sql = "SELECT * FROM clienti where nume_cli= '$id'";

echo " ";
echo " ";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=2 style=\"width:600px; line-height:40px; margin-left: auto; margin-right: auto;\">";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nume</th>";
                echo "<th>Prenume</th>";
                echo "<th>CNP</th>";
                echo "<th>Serie</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['idclient'] . "</td>";
                echo "<td>" . $row['nume_cli'] . "</td>";
                echo "<td>" . $row['prenume_cli'] . "</td>";
                echo "<td>" . $row['cnp_cli'] . "</td>";
                echo "<td>" . $row['serie_cli'] . "</td>";
                
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