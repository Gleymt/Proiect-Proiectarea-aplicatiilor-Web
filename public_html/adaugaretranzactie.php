<!DOCTYPE html>
<html lang="en">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<head>
<style type="text/css">
        body{ font: 14px sans-serif; text-align:center;}
    
    </style>
<meta charset="UTF-8">
</head>
<body>
<div class="wrapper">
        <h2>Adaugare Tranzactie</h2>
        <p>Va rog sa introduceti datele tranzactiei.</p>
<form action="adaugaretr.php" method="post">
    <div class="form-group">
        <label for="idclient">ID Client:</label>
        <input type="text" name="id" id="idclient">
    </div>
    <div class="form-group">
        <label for="sumaprim">Suma primita:</label>
        <input type="text" name="sumaprimita" id="sumaprim">
    </div>
    <div class="form-group">
        <label for="sumaof">Suma oferita:</label>
        <input type="text" name="sumaoferita" id="sumaof">
    </div>
     <div class="form-group">
        <label for="datatr">Data tranzactiei:</label>
        <input type="text" name="datatranzactiei" id="datatr">
    </div>
    <input class="btn btn-primary" type="submit" value="Submit">
</form>
</div>
<div>
<p></p>
<p><a class="btn btn-primary" href="tranzactii.php">Intoarcere</a>.</p>
</div>

<div>
<p></p>
<p><a class="btn btn-primary" href="welcome.php">Pagina principala</a>.</p>
</div>
</body>
</html>