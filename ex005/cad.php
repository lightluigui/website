<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado do processo</h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"] ?? "sem nome"; // $nome é a variavel e o ["nome"] é o valor posto em name na label do html
            $sobrenome = $_GET["sobrenome"] ?? "desonhecido"; // o ?? é o operador coalecent e Nulo
            echo "<p> é um prazer te conhecer, $nome $sobrenome! este é o meu site</p>"

        ?>
        <p><a href="index.html">Voltar para Pagina Anterior</a></p>
    </main>
</body>
</html>