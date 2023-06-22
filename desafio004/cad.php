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
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''.$fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
    
            $cotacao = $dados["value"][0]["cotacaoCompra"]; // api banco do brasil

           (float)$num = $_GET["num"] ?? 0; 
           $dolar = $num / $cotacao;
           
           $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
           echo "<p>Seus ". numfmt_format_currency($padrao, $num, "BRL") ." equivalem a ". numfmt_format_currency($padrao, $dolar, "USD") ."</p>";


           echo '*Cotação retirada da <a href="https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios/resource/43a16981-5a4b-47d9-b7bd-4c0c4093f994" target="_blank"><strong>API do Banco do Brasil.</strong></a>';
        ?>
         <button onclick="javascript:history.go(-1)">&#129044; Voltar</button>
         
         
    </main>
</body>
</html>