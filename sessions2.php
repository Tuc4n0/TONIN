<?php
session_start();

if (isset($_SESSION["usuario"])) {
    echo "<h2>Usuário logado: {$_SESSION['usuario']}</h2>";
} else {
    echo "<h2>Não existem sessões abertas...</h2>";
}
?>
