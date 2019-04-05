<?php
require_once 'connect.php';

if($_GET['id']) {
    $sql = "SELECT id, nome, endereco, telefone, nascimento FROM pessoa";

    $res = $connect->query($sql);

    while($row = $res->fetch_assoc()) {
        $nome = $row['nome'];
        $endereco = $row['endereco'];
        $telefone = $row['telefone'];
        $nascimento = $row['nascimento'];
    }

    if($_POST) {
        // TODO: Criar update
    }
}
