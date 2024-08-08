<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Strings em PHP</h1>

    <?php 
        // PHP diferencia ASPAS SIMPLES e ASPAS DUPLAS.
        // Aspas simples vc não interpreta o conteudo, diferente das aspas duplas que interpretam
        // o "." é usado para concatenar(juntar) duas strings
        $nome = 'matheus';
        $sobrenome = 'araujo \u{1F596 }';
        echo "$nome \"freitas\"  $sobrenome"
    ?>
</body>
</html>