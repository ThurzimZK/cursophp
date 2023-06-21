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
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
           (float)$num = $_GET["num"] ?? "error"; 
           $dolar = $num / 4.77;
           
           echo "<p>Seus R$$num equivalem a US$ ".round($dolar, 2)."</p>";
           echo "*<strong>Cotação fixa de R$5,22</strong> informada diretamente no código."
        ?>
        <p><a href="javascript:history.go(-1)"> <-- Voltar</a></p>
    </main>
</body>
</html>