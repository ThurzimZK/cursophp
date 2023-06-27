<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $sal = $_GET['salario'] ?? 0;
        $minimo = 1320;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$sal?>">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ",",".")?></strong></p>
            <!-- <p>Considerando o salário mínimo de <strong>R$1.320,00</strong></p> -->
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $quant = intdiv($sal, 1380);
            $sobra = $sal - (1380 * $quant);
            $format = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Quem recebe um salário de R$ 1.380,00 ganha <strong>". (int)$quant ." salários mínimos</strong> + " . numfmt_format_currency($format, $sobra, "BRL");

        ?>
    </section>
</body>
</html>