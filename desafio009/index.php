<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
        $peso1 = $_GET['p1'] ?? 1;
        $peso2 = $_GET['p2'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" min="0" value="<?=$valor1?>">
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" min="1" value="<?=$peso1?>">
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" min="0" value="<?=$valor2?>">
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" min="1" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Cálculo de Médias</h2>
        <?php 
            $msimples = ($valor1 + $valor2) / 2;
            $mponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

            echo "Analisando valores de $valor1 e $valor2:";
            echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($msimples, 2, ",",".");
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ". number_format($mponderada, 2, ",",".") ."</ul>";
        ?>
    </section>
</body>
</html>