<?php

// Stringa contenente tutti i caratteri possibili per la generazione della password
// Include lettere minuscole, maiuscole, numeri e caratteri speciali
// Definisco i gruppi di caratteri disponibili
$lowercase = 'abcdefghijklmnopqrstuvwxyz';
$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$specialChars = '!@#$%^&*()_+-=[]{}|;:,.<>?';

// Costruisco la stringa dei caratteri in base alle opzioni selezionate dall'utente
$charactersLength = '';

if (isset($_GET['lowercase']) && $_GET['lowercase'] == '1') {
    $charactersLength .= $lowercase;
}
if (isset($_GET['uppercase']) && $_GET['uppercase'] == '1') {
    $charactersLength .= $uppercase;
}
if (isset($_GET['numbers']) && $_GET['numbers'] == '1') {
    $charactersLength .= $numbers;
}
if (isset($_GET['special']) && $_GET['special'] == '1') {
    $charactersLength .= $specialChars;
}

// Se nessun tipo di carattere è selezionato, uso tutti per default
if (empty($charactersLength)) {
    $charactersLength = $lowercase . $uppercase . $numbers . $specialChars;
}


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