<?php 
class Memorias {
    private $Data;
    private $Descricao;
    private $Arquivo;
    private $Sentimento;

    public function __construct($Data, $Descricao, $Arquivo, $Sentimento) {
        $this->setData($Data) = $Data;
        $this->setDescricao($Descricao) = $Descricao;
        $this->setArquivo($Arquivo) = $Arquivo;
        $this->setSentimento($Sentimento) = $Sentimento;
    }

    public function getData() {
        return $this->Data;
    }

    public function getDescricao() {
        return $this->Descricao;
    }

    public function getArquivo() {
        return $this->Arquivo;
    }

    public function getSentimento() {
        return $this->Sentimento;
    }

    public function setData($Data) {
        $this->Data = $Data;
    }

    public function setDescricao($Descricao) {
        $this->Descricao = $Descricao;
    }

    public function setArquivo($Arquivo) {
        $this->Arquivo = $Arquivo;
    }

    public function setSentimento($Sentimento) {
        $this->Sentimento = $Sentimento;
    }
}

?>