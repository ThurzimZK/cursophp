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
        <h1>Resultado Final</h1>
        <p>
            <?php
               $num = $_GET["num"] ?? "error";
              // $antes = $num - 1;
             //  $depois = $num + 1;
               echo "O número escolhido foi $num";
               echo "<br/>O seu <em>antecessor<em/> é ". ($num - 1);
               echo "<br/>O seu <em>sucessor<em/> é ". ($num + 1);
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>