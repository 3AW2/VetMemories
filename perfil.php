<?php
include "user.php";

class Perfil {
    private $Nome;
    private $AnoEscolar;
    private $Biografia;
    private $Escola;
    private $User;

    public function __construct($Nome, $AnoEscolar, $Biografia, $Escola) {
        $this->setNome($Nome) = $Nome;
        $this->setAnoEscolar($AnoEscolar) = $AnoEscolar;
        $this->setBiografia($Biografia) = $Biografia;
        $this->setEscola($Escola) = $Escola;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getAnoEscolar() {
        return $this->AnoEscolar;
    }

    public function getBiografia() {
        return $this->Biografia;
    }

    public function getEscola() {
        return $this->Escola;
    }

    public function getUser() {
        return $this->User;
    }
    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setAnoEscolar($AnoEscolar) {
        $this->AnoEscolar = $AnoEscolar;
    }

    public function setBiografia($Biografia) {
        $this->Biografia = $Biografia;
    }

    public function setEscola($Escola) {
        $this->Escola = $Escola;
    }

    public function setUser($Email, $Senha) {
        $this->User = new User($Email, $Senha);
    }
}

?>
