<?php

use crypto\model\DAO\UsuarioDAO;

function base_url(string $path = ''): string
{
    return $path === '' ? '/crypto' : "/crypto/$path";
}

function redirect(string $path): void
{
    header("location: $path");
}

function getUserByNickname(string $nickname)
{
    $userDAO = new UsuarioDAO;
    return $userDAO->getByNickname($nickname);
}