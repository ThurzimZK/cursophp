<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $atual = date('Y');
        $nascimento = $_GET['anoNasceu'] ?? 2000;
        $escolha = $_GET['anoEscolhido'] ?? $atual;
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="anoNasceu">Em que ano você nasceu?</label>
        <input type="number" name="anoNasceu" id="anoNasceu" value="<?=$nascimento?>" min="1850" max="<?=$atual - 1?>">
        <?php 
         date_default_timezone_set("America/Sao_Paulo");
         
         echo "<label for=\"anoEscolhido\">Quer saber sua idade em que ano? (atualmente estamos em <strong>". $atual. "</strong>)</label>";
        ?>
        <input type="number" name="anoEscolhido" id="anoEscolhido" value="<?=$escolha?>" min="1850">
        <input type="submit" value="Qual será minha idade?">
        
        
    </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            $idade = $escolha - $nascimento;
            if ($escolha < $nascimento) {
                echo "O ano atual deve ser maior que o ano de nascimento!";
            } elseif ($escolha < $atual && $idade == 1){
                echo "Quem nasceu em $nascimento tinha <strong>$idade ano</strong> em $escolha!";
            } elseif ($escolha < $atual){
                echo "Quem nasceu em $nascimento tinha <strong>$idade anos</strong> em $escolha!";
            } elseif ($idade == 1){
                echo "Quem nasceu em $nascimento vai ter <strong>$idade ano</strong> em $escolha!";
            } else {
                echo "Quem nasceu em $nascimento vai ter <strong>$idade anos</strong> em $escolha!";
            }
            
        ?>
    </section>
    
</body>
</html>