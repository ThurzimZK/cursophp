<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="valor">Qual valor você deseja sacar? (R$)*</label>
        <input type="number" name="valor" id="valor" min="0" step="0.01" value="<?=$valor?>">
        <p style="font-size: 0.6em">*Notas disponíveis: R$100, R$50, R$10 e R$5 </p>
        <input type="submit" value="Sacar">
    </form>
    </main>
    <section>
        <?php 
            $sobra = $valor;
            $cem = floor($sobra / 100);
            $sobra %= 100;
            $cinq = floor($sobra / 50);
            $sobra %= 50;
            $dez = floor($sobra / 10);
            $sobra %= 10;
            $cinco = floor($sobra / 5);
            $sobra %= 5; 
            $um = floor($sobra / 1);
            $sobra %= 1;
        ?>
        <h2>Saque de R$<?=$valor?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="images/100-reais.jpg" alt="Nota de 100" class="nota">x<?=$cem?></li>
            <li><img src="images/50-reais.jpg" alt="Nota de 50" class="nota">x<?=$cinq?></li>
            <li><img src="images/10-reais.jpg" alt="Nota de 10" class="nota">x<?=$dez?></li>
            <li><img src="images/5-reais.jpg" alt="Nota de 5" class="nota">x<?=$cinco?></li>
            <li><img src="images/1-real.jpg" alt="Nota de 1" class="nota">x<?=$um?></li>
        </ul>
    </section>
</body>
</html>