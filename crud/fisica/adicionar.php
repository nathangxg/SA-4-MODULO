<?php

require_once "../conexao.php";

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$nascimento = $_GET['nascimento'];
$telefone = $_GET['telefone'];
$cep = $_GET['cep'];
$rua = $_GET['rua'];
$complemento = $_GET['complemento'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];

    
    $query="";
    
    $query = "INSERT INTO tb_pessoa_fisica VALUES (NULL, '$nome', '$sobrenome', '$nascimento', '$telefone', '$cep', '$rua', '$complemento', '$bairro', '$cidade', '$estado');";

    $word="inseridos";

    $resultado_inserir = $con->query($query);

    if ($resultado_inserir) {
        echo "<div class='alert alert-success' role='alert'>";
        echo "Dados $word com sucesso!";
        echo "</div>";

        unset($nome);
        unset($sobrenome);
        unset($nascimento);
        unset($telefone);
        unset($cep);
        unset($rua);
        unset($complemento);
        unset($bairro);
        unset($cidade);
        unset($estado);


    } else {
        echo "<div class='alert alert-danger' role='alert'>";
        echo "Erro na tentativa de enviar dados ao banco: ";
        echo "</div>";
    }
    $con->close();
    Header('Location: ../../tipos/fisica.php');

?>