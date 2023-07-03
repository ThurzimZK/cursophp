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
        $totalseg = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="seg">Qual é o total de segundos?</label>
        <input type="number" name="seg" id="seg" min="0" value="<?=$totalseg?>">
        <input type="submit" value="Calcular">
    </form>
    </main>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php 
            $restoSemana = $totalseg % 604800;
            $restoDia = $restoSemana % 86400;
            $restoHora = $restoDia % 3600;
            $restoMinuto = $restoHora % 60;
            if ($totalseg >= 604800) {
                $semanas = intdiv($totalseg, 604800);
                $dias = intdiv($restoSemana, 86400);
                $horas = intdiv($restoDia, 3600);
                $minutos = intdiv($restoHora, 60);
                $segundos = $restoMinuto;
            } elseif($totalseg < 604800 && $totalseg >= 86400){
                $semanas = 0;
                $dias = intdiv($totalseg, 86400);
                $horas = intdiv($restoDia, 3600);
                $minutos = intdiv($restoHora, 60);
                $segundos = $restoMinuto;
            } elseif($totalseg < 86400 && $totalseg >= 3600){
                $semanas = 0;
                $dias = 0;
                $horas = intdiv($totalseg, 3600);
                $minutos = intdiv($restoHora, 60);
                $segundos = $restoMinuto;
            } elseif($totalseg < 3600 && $totalseg >= 60){
                $semanas = 0;
                $dias = 0;
                $horas = 0;
                $minutos = intdiv($totalseg, 60);
                $segundos = $restoMinuto;
            } else{
                $semanas = 0;
                $dias = 0;
                $horas = 0;
                $minutos = 0;
                $segundos = $totalseg;
            }           
        
            echo "Analisando o valor que você digitou, <strong>$totalseg segundos</strong> equivalem a um total de:";
            echo "<ul><li> ". $semanas ." semanas";
            echo "<li> ".$dias." dias";
            echo "<li> ".$horas." horas";
            echo "<li> ".$minutos." minutos";
            echo "<li> ".$segundos." segundos</ul>";

            // 1 hora -> 3600
            // 1 dia -> 86400
            // 1 semana -> 604800


        ?>
    </section>
</body>
</html>