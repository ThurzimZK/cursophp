<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
           // var_dump($_GET); $_GET $_POST $_COOKIES -> junção delas é $_REQUEST
           $nome = $_GET["nome"] ?? "sem nome"; // ?? caso se nao tiver parametro
           $sobre = $_GET["sobrenome"] ?? "desconhecido"; // a nova variavel nao precisa ter o mesmo nome
           echo "<p>É um prazer te conhecer, <strong>$nome $sobre</strong>!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar à página anterior</a></p>
    </main>
</body>
</html>