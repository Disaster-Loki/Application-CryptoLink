<?php
namespace Controller;

use Model\DTO\UsuarioDTO;
use Model\DAO\UsuarioDAO;

class UserController {

    public function register() {
        // Verifica se o formulário foi submetido
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Obtém os dados do formulário
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            // Cria uma instância do UsuarioDTO com os dados do formulário
            $usuarioDTO = new UsuarioDTO($email, $username, $password, null);

            // Cria uma instância do UsuarioDAO
            $usuarioDAO = new UsuarioDAO();

            // Chama o método de inserção de usuário no banco de dados
            $usuarioDAO->insertUser($usuarioDTO->getEmail(), $usuarioDTO->getUsername(), $usuarioDTO->getPassword(), $usuarioDTO->getDataRegistro());
        }

        // Redireciona para a página de registro
        header("Location: ../View/register/register.php");
        exit();
    }
}