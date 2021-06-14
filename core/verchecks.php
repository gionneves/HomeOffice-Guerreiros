<?php
/**
 * Sistema que ver os checks do servidor
 *
 * PHP version 7
 *
 * @category Admin
 * @package  Usuario
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

require "conn.php";
?>

<table class="table is-striped is-hoverable is-bordered">
    <thead>
        <tr class="has-text-centerd">
            <th>Funcionario</th>
            <th>Data/Hora</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->prepare("SELECT nome, criado FROM checks");
        $result->execute();
        foreach ($result->fetchAll() as $row) {
            echo "<tr>";
            echo "<th>" . $row['nome'] . "</th>";
            echo "<th>" . $row['criado'] . "</th>";
            echo "</tr>";
        }

        ?>
    </tbody>
    </table>