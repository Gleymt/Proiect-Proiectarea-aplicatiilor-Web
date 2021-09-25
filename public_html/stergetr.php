<?php

require_once "config.php";

// Attempt insert query execution
$id = mysqli_real_escape_string($link, $_REQUEST['idt']);
$sql = "DELETE FROM tranzactii WHERE idtranz= '$id'";

if(mysqli_query($link, $sql)){
    echo "Tranzactie stearsa cu succes!";
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
<p><a href="tranzactii.php">Tranzactii</a>.</p>

<div>
<p></p>
<p><a class="btn btn-primary" href="welcome.php">Pagina principala</a>.</p>
</div>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</html>