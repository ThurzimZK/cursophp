<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $valor = mt_rand(0,100);
            // random_int() -> para gerar numeros criptograficamente seguros

            echo "Gerando um número aleatório entre 0 e 100...<br/>";
            echo "O valor gerado foi <strong>$valor</strong><br/>";

            
        ?>
        <button onclick="javascript:document.location.reload()">&#x27F3; Gerar Outro</button>
    </main>
</body>
</html>