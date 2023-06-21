<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel e constante</title>
</head>
<body>
    <h1>Variavel</h1>
    <?php 
        $nome = "Arthur";
        $sobrenome = "Oliveira";
        const PAIS = "Brasil";
        //
        //
        //
        //
        $nome = "Mudou";
        $sobrenome = "Valores";
        //
        //
       // const PAIS = "EUA"; - erro, constante nao muda
        //
        echo "Seu nome é $nome $sobrenome! Você mora no " . PAIS . ".";
    ?>
</body>
</html>