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
            $cotacao = 4.77; // pega do google
            (float)$num = $_GET["num"] ?? 0; 
            $dolar = $num / $cotacao;
           
           //echo "<p>Seus R$". number_format($num, 2, ",", ".") ." equivalem a US$ ".number_format($dolar, 2, ",", ".")."</p>";
           // formatação com internacionalização
           
           $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
           echo "<p>Seus ". numfmt_format_currency($padrao, $num, "BRL") ." equivalem a ". numfmt_format_currency($padrao, $dolar, "USD") ."</p>";


           echo "*<strong>Cotação fixa de R$5,22</strong> informada diretamente no código.";
        ?>
         <button onclick="javascript:history.go(-1)">&#129044; Voltar</button>
    </main>
</body>
</html>