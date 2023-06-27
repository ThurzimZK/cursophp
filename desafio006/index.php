<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $divE = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo </label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$divE?>">
            <label for="divisor">Divisor </label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">

        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
           // meu codigo
            $quociente = intdiv($divE, $divisor);
            $resto = $divE % $divisor;
            // echo "$divE / $divisor = ". $quociente;
            // echo "</br>Resto $resto";

        ?>
        <!-- RESOLUÇÃO -->

        <table class="divisao">
            <tr>
                <td><?=$divE?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>