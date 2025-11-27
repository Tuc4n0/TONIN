<?php
// api.php - Consulta CEP usando API ViaCEP
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta API - ViaCEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h2 class="mb-4">Consultar CEP usando API (ViaCEP)</h2>

<form method="get" class="mb-3">
    <div class="input-group">
        <span class="input-group-text">CEP</span>
        <input type="text" class="form-control" name="cep" placeholder="Ex: 01001000">
        <button class="btn btn-primary">Buscar</button>
    </div>
</form>

<?php
if (isset($_GET["cep"])) {

    $cep = preg_replace("/[^0-9]/", "", $_GET["cep"]);
    $url = "https://viacep.com.br/ws/$cep/json/";

    // ====== cURL para evitar erros SSL ======
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resposta = curl_exec($ch);
    curl_close($ch);

    $dados = json_decode($resposta, true);
    // ========================================

    if (!$dados || isset($dados["erro"])) {
        echo "<div class='alert alert-danger'>CEP não encontrado!</div>";
    } else {
        echo "<div class='card p-3'>";
        echo "<h4>Resultado:</h4>";
        echo "<p><strong>CEP:</strong> {$dados['cep']}</p>";
        echo "<p><strong>Logradouro:</strong> {$dados['logradouro']}</p>";
        echo "<p><strong>Bairro:</strong> {$dados['bairro']}</p>";
        echo "<p><strong>Cidade:</strong> {$dados['localidade']}</p>";
        echo "<p><strong>Estado:</strong> {$dados['uf']}</p>";
        echo "</div>";
    }
}
?>

</body>
</html>
