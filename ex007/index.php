<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritméticas</title>
</head>
<body>
    <h1>Expressões Aritméticas</h1>
    <?php 
        $res = 50 / 2 + 3 ** 2;
        echo "O resultado é $res";
        $_res = 50 / (2 + 3) ** 2;
        echo "<br/>O resultado é $_res";
    ?>
    <h1>Funções Aritméticas</h1>
    <?php 
        echo "<strong>Valor absoluto:</strong><br/>";
        $r = abs(500);
        echo "A resposta é $r";
        $_r = abs(-2000);
        echo "<br/>A resposta é $_r";
        echo "<br/>";
        echo "<br/><strong>Conversão de base:</strong><br/>";
        $result = base_convert(254, 10, 2); //numero -> da base -> pra base
        echo "Resposta $result";
    ?>
    <!-- abs(); valor absoluto
    base_convert(); conversao de base
    ceil(); floor(); round(); arredondamento
    hypot(); hipotenusa
    intdiv(); divisão inteira
    min(); max(); minino e maximo entre os declarados
    pi(); pi
    pow(); potencia, pode usar **
    sin(); cos(); tan(); seno, cosseno e tangente
    sqrt(); raiz quadrada
    -->
  
</body>
</html>