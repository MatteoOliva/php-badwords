<?php
$user_paragrafo = $_GET ['paragrafo'];
$user_paragrafo_len = strlen($user_paragrafo);


$user_censura = $_GET ['censura'];
$user_censura_rep = str_replace( $user_censura, '***', $user_paragrafo );
$user_censura_rep_len = strlen($user_censura_rep);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>
        <?= $user_paragrafo . ' e la lunghezza totale della frase è ' . $user_paragrafo_len?>
    </h1>
    <h2>
        <?= $user_censura_rep . ' e la lunghezza totale della frase è ' . $user_censura_rep_len?>
    </h2>
    
</body>
</html>
