<?php

require_once "../conexao.php";

$id = $_GET['id'];
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$email = $_GET['email'];
$rua  = $_GET['rua'];

$query = "UPDATE aluno SET nome = '$nome', cpf = $cpf, rua = '$rua', email = '$email' WHERE id = '$id'";

$resultado_query = $con->query($query);

Header('Location: pesquisar.php?id=' . $_GET['id']);

?>