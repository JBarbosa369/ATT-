<?php
$METODO_REQ = $_SERVER["REQUEST_METHOD"];

if ($METODO_REQ == "POST") {
    $nome = $_POST["nome"] ?? "";
    $sobrenome = $_POST["sobrenome"] ?? "";

 
    $nome = htmlspecialchars(trim($nome));
    $sobrenome = htmlspecialchars(trim($sobrenome));

    if ($nome && $sobrenome) {
        echo "<p>Nome completo: <strong>$nome $sobrenome</strong></p>";
    } else {
        echo "<p>Preencha nome e sobrenome.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 19.01.2026</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="nome" placeholder="Digite seu nome">
    <br><br>
    <input type="text" name="sobrenome" placeholder="Digite seu sobrenome">
    <br><br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>

