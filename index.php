<?php
echo 'Hello World!<br>';
print 'Olá Mundo<br>';

$nome = 'Senac';
$idade = 79;
$funciona = true;
$altura = 2.57;

printf('Meu nome é %s e tenho %d<br>', $nome, $idade);

echo $idade + $altura;

if ($idade < 80){
    echo '<br>Senac é novo<br>';
} else {
    echo '<br>Senac é velho';
}

$dia = 'segunda';

switch($dia){
    case 'segunda':
        echo 'Inicio da semana<br>';
        break;
    case 'sexta':
        echo 'Graças a Deus<br>';
        break;
    default:
        echo 'Dia normal<br>';
}

for($i=1; $i<=5; $i++){
    echo "Valor (for): $i<br>";
}

$i=1;
while($i <= 5){
    echo "Valor (while): $i<br>";
    $i++;
}
?>

<h1>Esta é uma tag de título</h1>

<?php include "sessions.php"; ?>
