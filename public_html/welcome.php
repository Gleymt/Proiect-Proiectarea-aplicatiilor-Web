<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
   header("location: login.php");
   exit;
 }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bine ai venit!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>




<body display: inline-flex;>
    <div class="page-header">
        <h1>Buna, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> bine ai venit pe interfata schimbului valutar EZXchange.</h1>
    </div>
  
<div>     
    <p>
        <p><a href="clienti.php" class="btn btn-primary">Gestioneaza Clienti</a></p>
<p></p>
        <p><a href="tranzactii.php" class="btn btn-primary">Gestioneaza Tranzactii</a><p>
<p></p>
        <p><a href="cautaclient.php" class="btn btn-primary">Cautare Client</a><p>
<p></p>    
        <p><a href="cautatranzactie.php" class="btn btn-primary">Cautare Tranzactie</a><p>
<p></p>    
        <a href="reset-password.php" class="btn btn-warning">Schimbare parola</a>
        <a href="logout.php" class="btn btn-danger">Delogare</a>
    </p>
</div>
</body>

</html>