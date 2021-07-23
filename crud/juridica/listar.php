<?php 

include "../modules/head.php";
require_once "../conexao.php";


$query_select = "SELECT * FROM aluno";

$resultado_query = $con->query($query_select);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
        
    <table class="table">
    <thead class="thead bg-primary">
        <tr class="text-white">
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Endereço ID</th>
        <th scope="col">E-mail</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($resultado_query as $resultado):
            ?>
            <tr>
            <td><?=$resultado['id']?></td>
            <td><?=$resultado['nome']?></td>
            <td><?=$resultado['cpf']?></td>
            <td><?=$resultado['rua']?></td>
            <td><?=$resultado['email']?></td>
            </tr>
            <?php
        endforeach;
        ?>
        
    </tbody>
</table>
</body>

<?php
    include "../modules/footer.php";
?>

</html>




