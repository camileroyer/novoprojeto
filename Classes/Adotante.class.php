<?php
class Adotante{
    public $nome;
    public $idade;
    public $telefone;
    public $email;
    public $endereco;
    public $temoutrosanimais;
    public $experienciacompets;
    public $animaladotado;

    public function exibirAdotante(): string{
        return "Nome: {$this->nome}.";
    }

    public function adotarAnimal(): string{
        return "Quer adotar um {$this->animaladotado}.";
    }

    public function verificarIdade(): string{
        if ($this->idade < 18){
            return "Não pode adotar.";
        }
        else{
            return "Pode adotar.";
        }
    }

    public function verificarOutrosAnimais(): string{
        if ($temoutrosanimais = 'não'){
            return "Não tem outros animais.";
        }
        else{
            return "Tem outros animais.";
        }
    }

    public function listarContato(): string{
        return "Telfone: {$this->telefone}; E-mail: {$this->email}.";
    }

    public function temExperiencia(): string{
        if ($experienciacompets = 'não'){
            return "Não tem experiência.";
        }
        else{
            return "Tem experiência.";
        }
    }

    public function cancelarAdocao(): string{
        return "Animal adotado e removido da lista!";
    }

    public function resumoAdotante(): string{
        return "O nome do adotante é {$this->nome} e seu animal é {$this->animaladotado}.";
    }
}
?>