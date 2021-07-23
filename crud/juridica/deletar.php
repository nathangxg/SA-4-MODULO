<?php

require_once "../conexao.php";

$id = $_GET['id'];


$query = "DELETE FROM aluno WHERE (id = '$id')";

$resultado_query = $con->query($query);

Header('Location: ../index.php');


?>