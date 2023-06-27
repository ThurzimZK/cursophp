<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $seg = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="seg">Qual é o total de segundos?</label>
        <input type="number" name="seg" id="seg" min="0" value="<?=$seg?>">
        <input type="submit" value="Calcular">
    </form>
    </main>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php 
             
                $semanas1 = $seg / 604800;
                $dias1 = (int)$semanas1 * 7;
                $horas1 = (int)$dias1 * 24;
                $minutos1 = (int)$horas1 * 60;
                $segundos1 = (int)$minutos1 * 60;
                $semanas = (int)$semanas1;
                $dias = ((int)$seg - (int)$segundos1) / 86400;
                $horas = (((int)$seg - (int)$segundos1) - ((int)$dias * 86400)) / 3600;
                $minutos = (($horas * 3600 ) - ((int)$horas * 3600)) / 60;
                $segundos = (($minutos * 60 ) - ((int)$minutos * 60)) / 60;
            
            

            echo "Analisando o valor que você digitou, <strong>$seg segundos</strong> equivalem a um total de:";
            echo "<ul><li> ". (int)$semanas ." semanas";
            echo "<li> ".(int)$dias." dias";
            echo "<li> ".(int)$horas." horas";
            echo "<li> ".(int)$minutos." minutos";
            echo "<li> ".(int)$segundos." segundos</ul>";

            // 1 hora -> 3600
            // 1 dia -> 86400
            // 1 semana -> 604800


        ?>
    </section>
</body>
</html>