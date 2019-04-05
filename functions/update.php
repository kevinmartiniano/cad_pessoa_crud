<?php
require_once 'connect.php';

if($_GET['id']) {
    $sql = "SELECT id, nome, endereco, telefone, nascimento FROM pessoa";

    $res = $connect->query($sql);

    $nome = "";
    $endereco = "";
    $telefone = "";
    $nascimento = "";

    while($row = $res->fetch_assoc()) {
        $nome = $row['nome'];
        $endereco = $row['endereco'];
        $telefone = $row['telefone'];
        $nascimento = $row['nascimento'];
    }
}

if($_POST) {
    $sql = "UPDATE pessoa SET nome = '{$_POST['txtNome']}', endereco = '{$_POST['txtEndereco']}', nascimento = '{$_POST['txtNascimento']}' WHERE id = '{$_GET['id']}'";

    $connect->query($sql);

    header('Location: index.php');
}
