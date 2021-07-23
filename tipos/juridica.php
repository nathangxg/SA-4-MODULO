<?php

  require_once "../crud/conexao.php";

?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Pessoa Jurídica</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        form {
            width: 70%;
        }
    </style>

</head>

<body>
    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center">

        <form class="border p-5" method="GET" action="../crud/juridica/adicionar.php">

            <h1 class="text-center m-3">Cadastro pessoa Jurídica</h1>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" maxlength="18" value="00394460000141">
                </div>

                <div class="form-group col-md-8 d-flex align-items-end">
                    <button type="button" id="submitCNPJ" class="btn btn-outline-info">Pesquisar</button>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo">
                </div>
                <div class="form-group col-md-6">
                    <label for="abertura">Abertura:</label>
                    <input type="text" class="form-control" name="abertura" id="abertura" placeholder="Abertura">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="fantasia">Fantasia:</label>
                    <input type="text" class="form-control" id="fantasia" name="fantasia" placeholder="Fantasia">
                </div>
            </div>

            <div class="form-row">
          <div class="form-group col-md-4">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
          </div>

          <div class="form-group col-md-8 d-flex align-items-end">
            <button type="button" id="submitCEP" class="btn btn-outline-info">Pesquisar</button>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="rua">Rua:</label>
            <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua">
          </div>
          <div class="form-group col-md-6">
            <label for="complemento">Complemento:</label>
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
          </div>
          <div class="form-group col-md-4">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
          </div>

          <div class="form-group col-md-4">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
          </div>
        </div>

            <button type="submit" class="btn btn-outline-info mt-3">Salvar</button>
        </form>
    </div>


    <script src="../js/cnpj.js" async></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>