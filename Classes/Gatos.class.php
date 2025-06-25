<?php
class Gato{
    public $nome;
    public $pelagem;
    public $castrado;
    public $independente;
    public $vacinado;
    public $curioso;
    public $adoracolo;
    public $usacaixadeareia;

    public function exibirGato(): string{
        return "Nome: {$this->nome}";
    }

    public function castrar(): string{
        return "Ele é {$this->castrado}";
    }

    public function verificarPelagem(): string{
        return "Ele é {$this->pelagem}";
    }

    public function grauIndependencia($grau):string{
    $this->grauIndependencia= $grau;
    return "{$this->grauIndependencia}.";
    }

    public function vacinar(): string{
        return "Ele é {$this->vacinado}.";
    }

    public function resumoGato(): string{
        return "O nome do gato é {$this->nome}, ele é {$this->pelagem} e {$this->curioso}.";
    }

    public function encaixarCaixaAreia(): string{
        return "Ele {$usacaixadeareia} caixa de areia.";
    }

    public function verificarContato(): string{
        return "Ele {$this->adoracolo} colo.";
    }
}
?>