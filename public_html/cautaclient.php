<!DOCTYPE html>
<html lang="en">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<head>
<meta charset="UTF-8">
<title>Cautare Clienti</title>
<h1></h1>
</head>
<style type="text/css">
        body{ font: 20px sans-serif; text-align:center;}
    
    </style>
<body>
<div class="wrapper">
<form action="cautacli.php" method="post">
    <div class="form-group">
        <label for="idcli">Introdu un ID de client:</label>
        <input type="text" name="idc" id="idcli">
    </div>
    <input class="btn btn-primary" type="submit" value="Cautare">
</form>
</div>

<h2></h2>

<div class="wrapper">
<form action="cautaclinume.php" method="post">
    <div class="form-group">
        <label for="numecli">Introdu numele de familie al clientului:</label>
        <input type="text" name="numec" id="numecli">
    </div>
    <input class="btn btn-primary" type="submit" value="Cautare">
</form>
</div>
<div>
<p></p>
<p><a class="btn btn-primary" href="welcome.php">Intoarcere la pagina principala.</a>.</p>
</div>
</body>
</html>