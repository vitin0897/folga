<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculadora folga 5/1</title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
    <button><a href="./index.html"> Voltar </a></button>

    <?php
    $folgaAtual = $_GET['dayOff'];
    $natal = '2022/12/25';

    while (strtotime($folgaAtual) <= strtotime($natal)) { ?>
        <h1>
            <?php
                echo date('d/m/Y', strtotime($folgaAtual)); 
                $folgaAtual = date('Y/m/d', strtotime($folgaAtual . ' + 6 days'));
            ?>
        <hr>
        </h1>
    <?php
    }
    ?>
</body>

</html>