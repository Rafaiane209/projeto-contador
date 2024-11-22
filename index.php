<?php
include 'contador.php';
$contador = incrementarContador();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Acessos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Contador de Acessos</h1>
        <p>Esta página foi acessada:</p>
        <div class="contador">
            <span><?php echo $contador; ?></span>
            <p>vezes</p>
        </div>
    </div>
</body>
</html>

