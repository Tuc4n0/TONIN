<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>GET e POST</title>
</head>
<body class="p-4">

<form action="#" method="get">
    <div class="input-group mb-3">
        <span class="input-group-text">Valor via GET:</span>
        <input type="text" class="form-control" name="nome">
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar GET">
</form>

<form action="#" method="post" class="mt-3">
    <input type="text" name="nome" class="form-control mb-2">
    <input type="submit" value="Enviar POST" class="btn btn-success">
</form>

<?php
if (isset($_GET['nome'])) {
    echo "<br><strong>Recebido via GET:</strong> " . htmlspecialchars($_GET['nome']) . "<br>";
}
if (isset($_POST['nome'])) {
    echo "<strong>Recebido via POST:</strong> " . htmlspecialchars($_POST['nome']);
}
?>

</body>
</html>
