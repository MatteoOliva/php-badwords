<?php
$user_paragrafo = $_GET ['paragrafo'];
$user_paragrafo_len = strlen($user_paragrafo);

$user_censura = $_GET ['censura'];
$user_censure_replace = str_replace('***', $user_censura );
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
    
</body>
</html>
