<?php
class Cachorro extends Animais{
    public $nome;
    public $especie;
    public $raca;
    public $porte;
    public $nivelenergia;
    public $vacinado;
    public $vermifugado;
    public $sociavel;
    public $adestrado;

    public function exibirCachorro(): string{
        return "Nome: {$this->nome}.";
    }

    public function vacinar(): string{
        return "Ele é {$this->vacinado}.";
    }

    public function verificarAdestramento(): string{
        return "Ele é {$this->adestrado}";
    }

    public function atualizarNivelEnergia($valor):string{
        $this->nivelEnergia= $valor;
        return "{$this->nivelEnergia}.";
    }

    public function indicarPorte(): string{
        return "O porte é {$this->porte}.";
    }

    public function socializar(): string{
        return "Ele é {$this->sociavel}";
    }

    public function iniciarAdestramento(): string{
        return "??";
    }

    public function resumoCachorro(): string{
        return "O nome do cachorro é {$this->nome}, seu porte é {$this->porte} e é da raça {$this->raca}.";
    }
    }
?>