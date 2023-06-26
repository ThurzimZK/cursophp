<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $valor = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$valor?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $raizQ = sqrt($valor);
            $raizC = pow($valor,(1/3));

            echo "Analisando o <strong>número $valor</strong>, temos:";
            echo "<ul><li>A sua raiz quadrada é <strong>".number_format($raizQ, 3, ",", ".") ."</strong>";
            echo "<li>A sua raiz cúbica é <strong>".number_format($raizC, 3, ",", ".") ."</strong></ul>";
        ?>
    </section>
</body>
</html>