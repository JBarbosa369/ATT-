<?php
$url = $_SERVER["REQUEST_URI"] . $_SERVER
["REQUEST_URI"];
$METODO_REQ = $_SERVER["REQUEST_METHOD"];
echo $METODO_REQ;

echo $url;
if($METODO_REQ == "POST"){
    $input = $_POST["teste"];
    echo $input;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 19.01.2026</title>
</head>
<body>
    <form action=""method = "POST">
        <input type="text"  name = "teste" placeholder = "Digite algo...">
        <button>Enviar</button>
    </form>
</body>
</html>