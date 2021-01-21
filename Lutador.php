<?php

class Lutador {

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function apresentar() {

        echo "<br>Lutador: " .$this->getNome();
        echo "<br>Origem: ".$this->getNacionalidade();
        echo "<br>".$this->getIdade()."anos>";
        echo "<br>".$this->getAltura()."m de Altura";
        echo "<br>Pesando:".$this->getPeso()."Kg";
        echo "<br>Ganhou:".$this->getVitorias();
        echo "<br>Perdeu:".$this->getDerrotas();
        echo "<br>Empatou:".$this->getEmpates();
    }

    public function status() {
        echo"<br>".$this->getNome();
        echo "é um peso".$this->getCategoria();
        echo "<br>".$this->getVitorias()."vitória";
        echo "<br>".$this->getDerrotas()."derrotas";
        echo "<br>".$this->getEmpates()."empates";
    }

    public function ganharLuta() {

        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    
//=====================================================

function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
    $this->nome = $nome;
    $this->nacionalidade = $nacionalidade;
    $this->idade = $idade;
    $this->altura = $altura;
    $this->setPeso($peso);
    $this->vitorias = $vitorias;
    $this->derrotas = $derrotas;
    $this->empates = $empates;
}

//=====================================================

    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

   function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

   function getEmpates() {
        return $this->empates;
    }

//=====================================================
   
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Invalido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Medio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

}


