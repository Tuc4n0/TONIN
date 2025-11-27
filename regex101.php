<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>
<body>

<h1>Validar Regex</h1>

<form action="" method="get">
    <input type="text" name="regex">
    <input type="submit" value="Validar">
</form>

<?php
if (isset($_GET["regex"])) {
    $v = $_GET["regex"];
    echo "<h2>$v</h2>";

    if (preg_match("/^[0-9]+$/", $v)) {
        echo "Somente números";
    } else {
        echo "Contém outros caracteres";
    }
}
?>
</body>
</html>
