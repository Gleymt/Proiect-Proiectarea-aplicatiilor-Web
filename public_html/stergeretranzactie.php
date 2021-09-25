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
        <h2>Stergere tranzactie</h2>
<form action="stergetr.php" method="post">
    <div class="form-group">
        <label for="idtranz">Introdu un ID de tranzactie:</label>
        <input type="text" name="idt" id="idtranz">
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