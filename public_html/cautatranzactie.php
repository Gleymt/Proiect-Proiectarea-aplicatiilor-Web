<!DOCTYPE html>
<html lang="en">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<head>
<meta charset="UTF-8">
<title>Cautare Tranzactii</title>
<h1></h1>
</head>
<style type="text/css">
        body{ font: 20px sans-serif; text-align:center;}
    
    </style>
<body>
<div class="wrapper">
<form action="cautatranz.php" method="post">
    <div class="form-group">
        <label for="datatr">Introduceti data tranzactiei in formatul "ZZ/LL/AA":</label>
        <input type="text" name="datat" id="datatr">
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