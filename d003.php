<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Conversor de Real para Euro v1.0</h1>
        <?php
        $real = $_POST["real"];
        $euro = $real/5.21;
        echo "<p>O valor convertido é de <strong>€$euro</strong><br></p>";
        echo "<p><strong>*Valor de câmbio 
        turístico referente a data de 23/06/2023</strong></p>"
        ?>
    </div>

</body>
</html>