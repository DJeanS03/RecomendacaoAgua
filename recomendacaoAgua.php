<?php
class RecomendacaoAgua  {
    private $peso;
    private $altura;

    public function __construct($peso, $altura) {
        $this->setPeso($peso);
        $this->setAltura($altura);
    }

    public function setPeso($peso) {
        if ($peso <= 0) {
            throw new InvalidArgumentException("Peso deve ser um valor positivo.");
        }
        $this->peso = $peso;
    }

    public function setAltura($altura) {
        if ($altura <= 0) {
            throw new InvalidArgumentException("Altura deve ser um valor positivo.");
        }
        $this->altura = $altura;
    }

    public function calcularQuantidadeAgua() {
        $quantidade_agua = $this->peso * 30;
        if ($this->altura > 180) {
            $quantidade_agua += 500;
        }
        return $quantidade_agua;
    }

    public function exibirRecomendacao() {
        $quantidade_agua = $this->calcularQuantidadeAgua();
        return "A quantidade de água recomendada para uma pessoa com {$this->peso} kg e {$this->altura} cm de altura é: {$quantidade_agua} ml por dia.";
    }
}

function mostrar_recomendacao_agua($peso, $altura) {
    try {
        $hidratacao = new RecomendacaoAgua ($peso, $altura);
        return $hidratacao->exibirRecomendacao();
    } catch (InvalidArgumentException $e) {
        return "Erro: " . $e->getMessage();
    }
}

echo mostrar_recomendacao_agua(70, 175);
?>
