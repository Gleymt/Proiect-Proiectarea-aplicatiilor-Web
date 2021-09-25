<?php

require_once "config.php";

// Attempt insert query execution
$id = mysqli_real_escape_string($link, $_REQUEST['idc']);
$sql = "DELETE FROM clienti WHERE idclient= '$id'";

if(mysqli_query($link, $sql)){
    echo "Client sters cu succes!";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<html>
<style type="text/css">
        body{ font: 14px sans-serif; text-align:center;}
    
    </style>
<p><a href="clienti.php">Intoarcere la gestiune clienti.</a>.</p>
<div>
<p></p>
<p><a class="btn btn-primary" href="welcome.php">Intoarcere la pagina principala</a>.</p>
</div>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</html>