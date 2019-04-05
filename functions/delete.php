<?php
require_once 'connect.php';

if($_GET['id']) {
    $sql = "DELETE FROM pessoa WHERE id = {$_GET['id']}";

    $connect->query($sql);

    header('Location: ../index.php');
}
