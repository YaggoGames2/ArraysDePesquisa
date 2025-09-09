<?php
$mensagem ="";
$pessoas = ["nome" => "Isaac", "idade" => 15];
var_dump($pessoas);


if (array_key_exists("nome", $pessoas)) {
    $mensagem = "A chave 'nome' existe!";
} else {
    $mensagem = "A chave 'nome' não existe!";
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>
<body>
    <h1>Array Key Exists</h1>
    <?php echo $mensagem ?>
</body>
</html>