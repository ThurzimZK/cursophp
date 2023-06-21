<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
</head>
<body>
    <h1>Manipulando strings</h1>
    <?php 
        $nome = "Arthur";
        $sobrenome = "Oliveira";
        echo "$nome $sobrenome \u{1F596} <br/>";
        echo '$nome $sobrenome \u{1F596} <br/>';

        const TRABALHO = "Estágio";
        echo "Seu trabalho é: TRABALHO <br/>";
        echo "Seu trabalho é " . TRABALHO . "<br/>";
        echo "Estamos no ano " . date('Y') ."<br/>";
        
    ?>
</body>
</html>