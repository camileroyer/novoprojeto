<?php
include_once './Classes/Animais.class.php';

$animal = new Animais();
$animal->nome = 'Pipoca';
$animal->especie = 'cachorro';
$animal->idade = 8;
$animal->sexo = 'masculino';
$animal->peso = 6;
$animal->cor = 'cinza e branco';
$animal->status = 'adotado';
$animal->chipado = 'sim';

echo $animal->exibirFicha();
?>