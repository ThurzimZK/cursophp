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
        $nascimento = $_GET['anoNasceu'] ?? 0;
        $escolha = $_GET['anoEscolhido'] ?? 0;
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="anoNasceu">Em que ano você nasceu?</label>
        <input type="number" name="anoNasceu" id="anoNasceu" value="<?=$nascimento?>" min="1850">
        <?php 
         date_default_timezone_set("America/Sao_Paulo");
         
         echo "<label for=\"anoEscolhido\">Quer saber sua idade em que ano? (atualmente estamos em <strong>". date('Y'). "</strong>)</label>";
        ?>
        <input type="number" name="anoEscolhido" id="anoEscolhido" value="<?=$escolha?>" min="1850">
        <input type="submit" value="Qual será minha idade?">
        
        
    </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            $idade = $escolha - $nascimento;
            
            echo "Quem nasceu em $nascimento vai ter <strong>$idade anos</strong> em $escolha!";
        ?>
    </section>
    
</body>
</html>