<?php

require_once "config.php";

 
// Escape user inputs for security
$id = $_POST['id'];
$sumaprim = mysqli_real_escape_string($link, $_REQUEST['sumaprimita']);
$sumaof = mysqli_real_escape_string($link, $_REQUEST['sumaoferita']);
$datatran = mysqli_real_escape_string($link, $_REQUEST['datatranzactiei']);

 
// Attempt insert query execution
$sql = "INSERT INTO tranzactii (idclient, sumaprimita, sumaoferita, datatranzactiei) VALUES ('$id', '$sumaprim', '$sumaof', '$datatran')";
if($id && $sumaprim && $sumaof && $datatran){
if(mysqli_query($link, $sql)){
    echo "Tranzactie adaugata cu succes!";
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
<p><a href="tranzactii.php">Intoarcere la gestiune tranzactii.</a>.</p>
<div>
<p></p>
<p><a class="btn btn-primary" href="welcome.php">Intoarcere la pagina principala.</a>.</p>
</div>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</html>


