<?php

 function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters); //strlen= restituisce lunghezza stringa.
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }

    return $randomString;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Password</title>
</head>
<body>

<form>
    <h1> Grande generatore di password</h1>
    <br>

<div class="mb-3 container-fluid">
    <label for="exampleInputPassword1" class="form-label">Genera Password</label>

    <input type="text" class="form-control" id="exampleInputPassword1"

    value="<?php echo generateRandomString(10); ?>">

</div>

  <button type="submit" class="btn btn-primary"> <?php generateRandomString(10)?> Genera</button>
</form>


</body>
</html>