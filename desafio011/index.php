<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="preco">Preço do produto (R$)</label>
        <input type="number" name="preco" id="preco" min="0" step="0.01" value="<?=$preco?>">
        <label for="reajuste">Qual será o percentual do reajuste? (<strong><span id="p">?</span>%</strong>)</label>
        <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" value="<?=$reajuste?>">
        <input type="submit" value="Reajustar">

        
    </form>
    </main>
    <section id="resultado"> 
        <h2>Resultado do Reajuste</h2>
        <?php 
          $novo = $preco + ($preco * ($reajuste / 100));
          $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
  
          echo "O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . ", com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrao, $novo, "BRL")."</strong> a partir de agora.";
        ?>
    </section>
    <script>
        mudaValor()
        function mudaValor() {
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>