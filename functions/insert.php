<?php

require_once 'connect.php';

if($_POST) {
    $nome = $_POST["txtNome"];
    $endereco = $_POST["txtEndereco"];
    $telefone = $_POST["txtTelefone"];
    $nascimento = $_POST["txtNascimento"];

    $sql = "INSERT INTO pessoa (nome, endereco, telefone, nascimento) VALUES ('{$nome}', '{$endereco}', '{$telefone}', '{$nascimento}')";

    $connect->query($sql);

    header('Location: index.php');
}
