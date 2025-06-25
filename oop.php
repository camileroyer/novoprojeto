<?php
include_once './Classes/Animais.class.php';
include_once './Classes/Cachorros.class.php';
include_once './Classes/Gatos.class.php';
include_once './Classes/Adotante.class.php';


//animal
echo "<h3>Animais</h3>";
$animal = new Animais();
$animal->nome = 'Pipoca';
$animal->especie = 'cachorro';
$animal->idade = 8;
$animal->sexo = 'masculino';
$animal->peso = 6;
$animal->cor = 'cinza e branco';
$animal->status = 'adotado';
$animal->chipado = 'sim';
echo $animal->resumoAnimal();


echo "<h4>_______________</h4>";


//cachorro
echo "<h3>Cachorro</h3>";
$cachorro = new Cachorro();
$cachorro->nome = 'Pipoca';
$cachorro->raca = 'shitzu';
$cachorro->porte = 'pequeno';
$cachorro->vacinado = 'vacinado';
$cachorro->vermifugado = 'vermifugado';
$cachorro->sociavel = 'não sociável';
$cachorro->adestrado = 'não adestrado';
$cachorro->sangue = 'A+';
echo $cachorro->resumoCachorro()."<br>";
echo 'Nível de energia é: '.$cachorro->atualizarNivelEnergia(5)."<br>";


echo "<h4>_______________</h4>";


//gato
echo "<h3>Gato</h3>";
$gato = new Gato();
$gato->nome = 'Theo';
$gato->pelagem = 'roxo';
$gato->castragem = 'castrado';
$gato->vacinado = 'vacinado';
$gato->curioso = 'curioso';
$gato->adoracolo = 'adora';
$gato->usacaixadeareia = 'usa';
echo $gato->resumoGato()."<br>";
echo 'Grau de independência é: '.$gato->grauIndependencia(5)."<br>";


echo "<h4>_______________</h4>";


//adotante
echo "<h3>Adotante</h3>";
$adotante = new Adotante();
$adotante->nome = 'Camile';
$adotante->idade = 18;
$adotante->telefone = 99522111;
$adotante->endereco = 'POA';
$adotante->temoutrosanimais = 'não';
$adotante->experienciacompets = 'sim';
$adotante->animaladotado = 'cachorro';
echo $adotante->resumoAdotante()."<br>";
echo $adotante->temExperiencia()."<br>";
echo $adotante->verificarOutrosAnimais()."<br>";
echo $adotante->verificarIdade()."<br>";
echo $adotante->cancelarAdocao()."<br>";
?>