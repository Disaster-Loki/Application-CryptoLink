<?php
namespace crypto\model\DTO;

class OrdemDTO {
    private $userId;
    private $tipoOrdem;
    private $criptomoeda;
    private $quantidade;
    private $preco;
    private $tipoUsuario;
    private $statusOrdem;

    public function __construct($userId, $tipoOrdem, $criptomoeda, $quantidade, $preco, $tipoUsuario, $statusOrdem) {
        $this->userId = $userId;
        $this->tipoOrdem = $tipoOrdem;
        $this->criptomoeda = $criptomoeda;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        $this->tipoUsuario = $tipoUsuario;
        $this->statusOrdem = $statusOrdem;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getTipoOrdem() {
        return $this->tipoOrdem;
    }

    public function setTipoOrdem($tipoOrdem) {
        $this->tipoOrdem = $tipoOrdem;
    }

    public function getCriptomoeda() {
        return $this->criptomoeda;
    }

    public function setCriptomoeda($criptomoeda) {
        $this->criptomoeda = $criptomoeda;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }

    public function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
    }

    public function getStatusOrdem() {
        return $this->statusOrdem;
    }

    public function setStatusOrdem($statusOrdem) {
        $this->statusOrdem = $statusOrdem;
    }
}