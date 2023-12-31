<?php
include "user.php";

class Perfil {
    private $NickName;
    private $Nome;
    private $AnoEscolar;
    private $Biografia;
    private $Escola;
    private $User;

    public function __construct($NickName, $Nome, $AnoEscolar, $Escola, $Email, $Senha, $Biografia='-') {
        $this->setNickName($NickName);
        $this->setNome($Nome);
        $this->setAnoEscolar($AnoEscolar);
        $this->setEscola($Escola);
        $this->setUser($Email, $Senha);
        $this->setBiografia($Biografia);

    }

    public function getNickName() {
        return $this->NickName;
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

    public function setNickName($NickName) {
        $this->NickName = $NickName;
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
