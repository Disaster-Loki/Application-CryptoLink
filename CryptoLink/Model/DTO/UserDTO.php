<?php
namespace Model\DTO;

class UsuarioDTO {
    private $email;
    private $username;
    private $password;
    private $dataRegistro;

    // Remova o $userId do construtor
    public function __construct($email, $username, $password, $dataRegistro) {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->dataRegistro = $dataRegistro;
    }

    // Métodos de acesso (getters)
    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDataRegistro() {
        return $this->dataRegistro;
    }
}