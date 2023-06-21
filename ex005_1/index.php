<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequencia de escape</title>
</head>
<body>
    <h1>Sequencia de escape</h1>
    <?php 
    $nome = "Arthur";
    $sobrenome = "Oliveira";
    $apelido = "Thurzim";


    echo "$nome \"$apelido\" $sobrenome"; // sequencia de escape \" \"
    //  \n nova linha   --> no localhosta ta funcionado <br/>
    // \t tabulação horizontal
    // \\ barra invertida
    // \$ sinal de cifrão
    // \u{} codepoint unicode
    ?>

    <h1>HEREDOC</h1>
    <?php 
        $facul = "UNIFEB";
        $ano = date('Y');
        echo <<< TESTE
            Olá estudantes da $facul!
                    Tudo bem com vocês?
                como esta sendo esse ano de $ano?
            Abraços! \u{1F596}
            
        TESTE; // funciona so em saida text e nao em html, ver codigo fonte da pagina
    ?>

    <h1>NOWDOC</h1>
    <?php 
        $facul = "UNIFEB";
        $ano = date('Y');
        echo <<< 'TESTE'
            Olá estudantes da $facul!
                    Tudo bem com vocês?
                como esta sendo esse ano de $ano?
            Abraços! \u{1F596}
            
        TESTE;
    ?>
</body>
</html>