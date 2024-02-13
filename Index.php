<?php

session_start();

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Nom = strip_tags($_POST['Nom']);

    if (!empty($Nom)) {

        $message = "Bonjour, " . htmlspecialchars($Nom) . "!";

    }

}

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ExoPhp</title>

</head>

<body>

    <?php if (!empty($message)): ?>

        <p><?= $message ?></p>

    <?php endif; ?>

    <form id="Form" action="Index.php" method="POST" enctype="multipart/form-data">

        <label for="Nom" >Nom :</label>

        <input type="text" name="Nom" id="Nom" placeholder="Veuillez saisir votre nom" required>

        <button type="submit">Envoyer</button>

    </form>

</div>
    
</body>

</html>