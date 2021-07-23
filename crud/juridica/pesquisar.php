<?php

    include "../modules/head.php";
    require_once "../conexao.php";


    
  
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query_select = "SELECT * FROM aluno WHERE id = '$id' LIMIT 1";

    $resultado_query = $con->query($query_select);

    if(isset($_POST['alterar'])){

    }
    
    if ($resultado_query !== false && $resultado_query->num_rows > 0){
        foreach ($resultado_query as $res) {
            
            $id = $res['id'];
            $nome = $res['nome'];
            $cpf = $res['cpf'];
            $email = $res['email'];
            $rua = $res['rua'];
        }
        
    } else {
        echo "<div class='alert alert-danger' role='alert'>";
        echo "Nenhum dado foi encontrado!";
        echo "</div>";
    }
?>

<form class="p-5"  action="<?php

if(isset($_POST['alterar'])){
    Header("Location: alterar.php?id=" . $_POST['id'] . " & nome=" . $_POST['nome'] . " & cpf=" . $_POST['cpf'] . " & rua=" . $_POST['rua'] . " & email=" . $_POST['email']);
}

if(isset($_POST['deletar'])){
    Header ("Location: deletar.php?id=" . $_POST['id']);
}


?>" method="post">
            
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="id" >Id:</label><br>
                    <input type="text" name="id" class="form-control" disabled value="<?= $id ?>">
                    <input type="hidden" name="id" value="<?= $id?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome:</label><br>
                    <input type="text" name="nome" class="form-control" value="<?= isset($nome)? $nome:'' ?>" placeholder="Escreva o nome aqui...">
                    <div class="invalid-feedback"><?= $array_erro['nome'] ?></div>
                </div>

                <div class="form-group col-md-6">
                    <label for="cpf">CPF:</label><br>
                    <input type="text" name="cpf" class="form-control" value="<?= isset($cpf)? $cpf:'' ?>" size="80" placeholder="Escreva o CPF aqui..."><br>
                </div>

                <div class="form-group col-md-6">
                    <label for="email">E-mail:</label><br>
                    <input type="text" name="email" class="form-control" value="<?= isset($email)? $email:'' ?>" size="80" placeholder="Escreva o e-mail aqui..."><br>
                </div>

                <div class="form-group col-md-6">
                    <label for="rua">Rua:</label>
                    <input type="text" name="rua" class="form-control border-blue" value="<?= isset($rua)? $rua: '' ?>" size="80" placeholder="Avenida Laranjeiras...">
                </div>

            </div>
          
            <div class="form-row">
           
            </div>
            
            <input type="submit" name="alterar" value="Alterar" class="btn btn-primary text-center">
            <input type="submit" name="deletar" value="Deletar" class="btn btn-primary text-center">

           
</form>

<?=include "../modules/footer.php";?>
        