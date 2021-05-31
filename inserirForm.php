<?php

include "conexao.php";

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $cpf = $_POST['cpf'];
    $doc = $_POST['doc'];

    $inserir = mysqli_query($con, "INSERT INTO `informacoes`(`nome`,`data`, `cpf`, `doc`) VALUES ('$nome','$data', '$cpf', '$doc')");

    if ($inserir) {
        echo "<script>alert('Dados enviados para o banco de dados')</script>";
    } else {
        echo "<script>alert('Dados incorretos')</script>";
    }
}
