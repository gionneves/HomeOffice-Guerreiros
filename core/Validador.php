<?php
/**
 * Validador de Usuário
 *
 * PHP version 7
 *
 * @category Usuario
 * @package  Usuario
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

class Validador {   
    /**
     * Função criada para verificar dentro do banco de dados se há algum login 
     * cadastrado com as informações identicas passadas pelo usuáŕio que está
     * realizando a entrada no sistema
     * 
     * @param $user Atribui o usuário para ser pesquisado no banco de dados
     * @param $pass Atribui a senha do usuário para verificação e autenticação
     * 
     * @return boolean
     */
    public function validarLogin($user, $pass)
    {
        global $conn;

        $result = $conn->prepare("SELECT * FROM funcionario WHERE apelido = :user AND senha = :pass");
        $result->bindParam(":user", $user);
        $result->bindParam(":pass", $pass);
        
        $result->execute();
        if ($result->rowCount() > 0) {
            $dados = $result->fetch();

            if ($dados['id'] > 0) {
                $_SESSION['id'] = $dados['id'];
                $_SESSION['nome'] = $dados['nome'];
                
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

?>