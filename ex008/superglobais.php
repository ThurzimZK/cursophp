<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>POST</h1>";
                var_dump($_POST);

                echo "<h1>REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>ENV</h1>";
                var_dump($_ENV);
                //foreach (getenv() as $c => $v) {
               //     echo "<br> $c -> $v";
               // }

               echo "<h1>SERVER</h1>";
               var_dump($_SERVER);

               echo "<h1>GLOBALS</h1>";
               var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>