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
    <title>Password Generator</title>

<body>
    <h1>Strong Password Generator</h1>
    
    <form method="GET" action="./result.php">
        <label>Password Length:</label>
        <input type="number" name="length" min="1" max="100" value="<?php echo isset($_GET['length']) ? $_GET['length'] : 8; ?>">

        <br><br>

        <input type="checkbox" name="lowercase" value="1" <?php echo isset($_GET['lowercase']) ? 'checked' : ''; ?>>
        <label>Include Lowercase Letters</label><br>

        <input type="checkbox" name="uppercase" value="1" <?php echo isset($_GET['uppercase']) ? 'checked' : ''; ?>>
        <label>Include Uppercase Letters</label><br>

        <input type="checkbox" name="numbers" value="1" <?php echo isset($_GET['numbers']) ? 'checked' : ''; ?>>
        <label>Include Numbers</label><br>

        <input type="checkbox" name="special" value="1" <?php echo isset($_GET['special']) ? 'checked' : ''; ?>>
        <label>Include Special Characters</label><br>

        <br>
        <button type="submit">Generate Password</button>
    </form>
    
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    
        <p><strong>Generated Password:</strong> <?php echo $generatedPassword; ?></p>
    <?php endif; ?>
</body>
</html>

