<?php

require_once './function.php'

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Password</title>
</head>
<body>

<form method="GET" action="./result.php">
    <h1> Grande generatore di password</h1>
    <br>

    <div class="mb-3 container-fluid">
        <label for="exampleInputPassword1" class="form-label">Genera Password</label>

        <input type="text" class="form-control" id="exampleInputPassword1"

        value="<?php echo $generatedPassword; ?>">

    </div>

    <div class="form-group">
        
        <input 
            type="number"
            id="length"
            name="length"
            min="1"
            max="100"
            value=<?php echo $length; ?>
            required
        >
    </div>
    <button type="submit" class="btn btn-primary">
      <?php ?>

    Genera</button>
</form>


</body>
</html>