<?php


// Stringa contenente tutti i caratteri possibili per la generazione della password
// Include lettere minuscole, maiuscole, numeri e caratteri speciali
$charactersLength = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';


function generatePassword($length) {
    // Accesso alla variabile globale contenente i caratteri
    global $charactersLength;

    // Inizializzo la stringa password vuota
    $password = '';

    // Ciclo per generare ogni carattere della password
    for ($i = 0; $i < $length; $i++) {
        // Genero un indice casuale basato sulla lunghezza della stringa dei caratteri
        $randomIndex = rand(0, strlen($charactersLength) - 1);
        // Aggiungo il carattere casuale alla password
        $password .= $charactersLength[$randomIndex];
    }

    // Ritorno la password completa
    return $password;
}

// Recupero la lunghezza richiesta dal parametro GET e la converto in intero
$length = (int)$_GET['length'];
// Inizializzo la variabile per la password generata
$generatedPassword = '';
// Inizializzo la variabile per eventuali messaggi di errore
$error = '';

// Validazione della lunghezza inserita e generazione della password
if ($length < 1) {
    // Errore se la lunghezza è troppo piccola
    $error = 'La lunghezza deve essere almeno 1 carattere.';
} elseif ($length > 100) {
    // Errore se la lunghezza supera il limite massimo
    $error = 'La lunghezza non può superare i 100 caratteri.';
} else {
    // Se la validazione passa, genero la password
    $generatedPassword = generatePassword($length);
}
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

<form method="GET" action="">
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