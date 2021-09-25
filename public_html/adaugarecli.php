<?php

require_once "config.php";

 
// Escape user inputs for security
$nume = $_POST['nume'];
$prenume = mysqli_real_escape_string($link, $_REQUEST['prenume']);
$cnp = mysqli_real_escape_string($link, $_REQUEST['cnp']);
$serie = mysqli_real_escape_string($link, $_REQUEST['serie']);

 
// Attempt insert query execution
$sql = "INSERT INTO clienti (nume_cli, prenume_cli, cnp_cli, serie_cli) VALUES ('$nume', '$prenume', '$cnp', '$serie')";
if($nume && $prenume && $cnp && $serie){
if(mysqli_query($link, $sql)){
    echo "Client adaugat cu succes!";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}} else {
    echo "Va rog sa completati toate campurile";}
 
// Close connection
mysqli_close($link);
?>

<html>
<style type="text/css">
        body{ font: 22px sans-serif; text-align:center;}
    
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<p><a href="clienti.php">Intoarcere la gestiune clienti.</a>.</p>
<div>
<p></p>
<p><a class="btn btn-primary" href="welcome.php">Intoarcere la pagina principala.</a>.</p>
</div>
</html>


