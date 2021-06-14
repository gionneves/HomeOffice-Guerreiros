<?php
/**
 * Sistema de login do usuario
 *
 * PHP version 7
 *
 * @category Usuario
 * @package  Usuario
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

 $login = $_POST['login'];
 $senha = $_POST['senha'];

 require "conn.php";
 require "Validador.php";

 $v = new Validador();

if ($v->validarLogin($login, $senha) == true) {
    if ($_SESSION['nome'] == "Admin") {
        header("Location: ../sistema/adm/index.html");
    } else {
        header("Location: ../sistema/index.html");
    }
} else {
    header("Location: ../index.html");
}

?>