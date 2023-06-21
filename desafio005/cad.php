<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_GET["num"] ?? "error";

            echo "Analisando o número $num informado pelo usuário:";
            echo "<li> A parte inteira do número é $int";
            echo "<li> A parte fracionária do número é $frac";
        ?>
    </main>
</body>
</html>