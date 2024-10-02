<?php
// Creo le variabili
// Testo inserito dall'utente
$input_text = $_GET["InputText"];
// Lunghezza del testo inserito
$text_length = strlen($input_text);
// Parola da censurare
$badword = $_GET["badword"];
// Uso la funzione str_ireplace per censurare la parola
/* 
Str-ireplace è case-insensitive accetta come parametri:
1. La parola da cercare
2. La stringa con cui sostituire la parola cercata
3. La stringa di parole in cui cercare la parola da voler sostituire
*/
$censored_text = str_ireplace($badword, "***", $input_text);
// Lunghezza del testo censurato
$censored_text_length = strlen($censored_text);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <!-- Bootstrap 5 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- Container -->
    <div class="container py-3">
        <!-- Title -->
        <div class="title-description">
            <h1 class="fw-semibold">PHP Badwords Result</h1>
        </div>
        <!-- Card del testo inserito -->
        <div class="card w-50 p-3 mb-5">
            <h3 class="fw-semibold ms-1">Testo inserito:</h3>
            <div class="card p-3 mb-2">
                <!-- Testo che ha inserito l'utente -->
                <p class="mb-0"><?php echo $input_text ?></p>
            </div>
            <!-- Lunghezza del testo inserito -->
            <h4 class="fw-semibold ms-1">Lunghezza del testo: <?php echo $text_length ?></h4>
        </div>
        <!-- Card del testo censurato -->
        <div class="card w-50 p-3">
            <h3 class="fw-semibold text-danger ms-1">Testo censurato:</h3>
            <div class="card p-3 mb-2">
                <!-- Testo censurato -->
                <p class="mb-0"><?php echo $censored_text ?></p>
            </div>
            <!-- Lunghezza del testo censurato -->
            <h4 class="fw-semibold ms-1">Lunghezza del testo: <?php echo $censored_text_length ?></h4>
        </div>
    </div>
</body>

</html>