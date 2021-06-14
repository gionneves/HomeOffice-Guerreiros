<?php
/**
 * Sistema que envia o check para o servidor
 *
 * PHP version 7
 *
 * @category Usuario
 * @package  Usuario
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

require "conn.php";

$funci = $_SESSION['id'];
$funcnome = $_SESSION['nome'];

if ($funci > 0) {
    $result = $conn->prepare("INSERT INTO checks(funcionario, nome) VALUES (:funci, :funcnome);");
    $result->bindParam(":funci", $funci);
    $result->bindParam(":funcnome", $funcnome);
    
    if ($result->execute()) {
        header("Location: ../sistema/index.html");
    } else {
        echo "ERROR: MYSQL PDO!";
    }
} else {
    header("Location: ../index.html");
}


?>