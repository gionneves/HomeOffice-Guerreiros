<?php
/**
 * Conexão com o banco de dados para poder carregar o Home-Office
 * 
 * PHP version 7
 * 
 * @category Database_Connectionm
 * @package  PHP_Core
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/   
 */

//'6ybAmX2bCg688fUu'
session_start();

global $coon;

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=dbhomeoffice', 'root', ''); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>