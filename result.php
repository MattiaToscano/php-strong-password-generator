<?php require_once 'function.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Risultato password generata</h1>

<div class= 'container-fluid'>
    <h2>
        <?php
         echo "La tua password è : " .$generatedPassword;
        ?>
    </h2>
</div>
    
</body>
</html>