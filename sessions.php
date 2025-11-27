<?php
session_start();

if (isset($_POST["nome"])) {
    $_SESSION["usuario"] = $_POST["nome"];
}

if (isset($_GET["sair"])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sessão 1</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="nome" placeholder="Digite seu nome">
    <input type="submit" value="Salvar na Sessão">
</form>

</body>
</html>

<?php
if (isset($_SESSION["usuario"])) {
    echo "<h1>Olá, " . htmlspecialchars($_SESSION["usuario"]) . "!</h1>";
    echo '<a href="?sair=true">Encerrar Sessão</a> ';
    echo '<a href="sessions2.php">Verificar Sessão</a>';
}
?>
