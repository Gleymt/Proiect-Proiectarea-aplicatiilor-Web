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
        <h2>Stergere Client</h2>
<form action="stergecli.php" method="post">
    <div class="form-group">
        <label for="idcli">Introdu un ID de client:</label>
        <input type="text" name="idc" id="idcli">
    </div>
    <input class="btn btn-primary" type="submit" value="Sterge">
</form>
</div>

<div>
<p></p>
<p><a class="btn btn-primary" href="clienti.php">Intoarcere</a>.</p>
</div>

</body>
</html>