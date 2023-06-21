<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
</head>
<body>
    <h1>Testando resgras</h1>
    <?php
        $nome = "Arthur";
        $Nome = "Jhenifer";
        const _TX = 850;
        $nomeCompletoCliente = "Camel Case";
        $telefone_contato_fornecedor = "Snake Case";


        echo "É verdade que seu nome é $NOME ?<br/>";
        echo "É verdade que seu nome é $Nome ?<br/>";
        echo "É verdade que seu nome é $nome ?<br/>";
        echo "Resultado = " . _TX;

    ?>
</body>
</html>