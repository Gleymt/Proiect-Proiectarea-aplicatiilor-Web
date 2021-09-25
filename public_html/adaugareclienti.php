<!DOCTYPE html>
<html lang="en">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<head>
<meta charset="UTF-8">
</head>
<style type="text/css">
        body{ font: 14px sans-serif; text-align:center;}
    
    </style>
<body>
<div class="wrapper">
        <h2>Adaugare Client</h2>
        <p>Va rog sa introduceti datele clientului.</p>
<form action="adaugarecli.php" method="post" display: inline-block;>
    <div class="form-group">
        <label for="numecli">Nume:</label>
        <input type="text" name="nume" id="numecli">
</div>
    <div class="form-group">
        <label for="prenumecli">Prenume:</label>
        <input type="text" name="prenume" id="prenumecli">
    </div>
    <div class="form-group">
        <label for="cnpcli">CNP:</label>
        <input type="text" name="cnp" id="cnpcli">
    </div>
    <div class="form-group">
        <label for="seriecli">Serie:</label>
        <input type="text" name="serie" id="seriecli">
    </div>
    <input class="btn btn-primary" type="submit" value="Submit">
</form>
</div>
<div>
<p></p>
<p><a class="btn btn-primary" href="clienti.php">Intoarcere</a>.</p>
</div>
</body>

</html>