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