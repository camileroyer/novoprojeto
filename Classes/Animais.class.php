<?php

class Animais {
    public $nome;
    public $especie;
    public $idade;
    public $sexo;
    public $peso;
    public $cor;
    public $status;
    public $chipado;
    
    public function exibirFicha(): string{
        return "Nome: {$this->nome}; Especie: {$this->especie}; Idade: {$this->idade}; Sexo: {$this->sexo}; Peso: {$this->peso}; Cor: {$this->cor}; Status: {$this->status}; Chipado: {$this->chipado}.";
    }

    public function alterarPeso(): string{
        return "O peso desse animal é {$this->peso}.";
    }

    public function alterarStatus(): string{
        return "O status desse {$this->especie} é {$this->status}.";
    }

    public function verificarIdade(): string{
        if ($idade <= 2){
            return "A idade é {$this->idade} e é um filhote.";
        }
        elseif ($idade > 2 && $idade < 10){
            return "A idade é {$this->idade} e é um adulto.";
        }
        else{
            return "A idade é {$this->idade} e é um idoso.";
        }
    }

    public function marcarComoChipado(): string{
        return "Não está chipado.";
    }

    public function desmarcarComoChipado(): string{
        return "Está chipado.";
    }

    public function resumoAnimal(): string{
        return "O nome desse animal é {$this->nome}, é {$this->especie} e está {$this->status}.";
    }

    public function verificarSexo(): string{
        return "O sexo desse {$this->especie} é {$this->sexo}.";
    }
}
?>