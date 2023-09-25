<?php

class User{
    private $email;
    private $senha;

    public function __construct($email, $senha) {
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function equals($user2) {
        return $user2->getEmail() == $this->getEmail() && $user2->getSenha() == $this->getSenha();
    }
}

?>