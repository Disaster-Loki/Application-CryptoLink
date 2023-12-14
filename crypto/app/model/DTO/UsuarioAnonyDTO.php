<?php
namespace crypto\model\DTO;

class UsuarioAnonyDTO {
    private $nickname;
    private $password;
    private $data_registro;

    public function __construct($nickname, $password, $data_registro) {
        $this->nickname = $nickname;
        $this->password = $password;
        $this->data_registro = $data_registro;
    }

    public function getNickname() {
        return $this->nickname;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getData_Registro() {
        return $this->data_registro;
    }
}