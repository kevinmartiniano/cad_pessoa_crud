<?php
require_once 'connect.php';

$sql = "SELECT id, nome, endereco, telefone, nascimento FROM pessoa";

$res = $connect->query($sql);

$rowTb = "";

while($row = $res->fetch_assoc()) {
    $rowTb .= "
    <tr>
        <th scope=\"row\">{$row['id']}</th>
        <td>{$row['nome']}</td>
        <td>{$row['endereco']}</td>
        <td>{$row['telefone']}</td>
        <td>{$row['nascimento']}</td>
        <td><a href=\"edit.php?id={$row['id']}\">Editar</a>&nbsp;<a href=\"functions/delete.php?id={$row['id']}\">Deletar</a></td>
    </tr>";
}
