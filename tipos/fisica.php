<?php

  require_once "../crud/conexao.php";

?>



<!doctype html>
<html lang="pt-br">
  <head>
    <title>Pessoa Física</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="../js/cep.js" async></script>

    <style>
      form{
          width: 70%;
      }
  </style>

  </head>
  <body>
    
    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center">

      <form class="border p-5" method="GET" action="../crud/fisica/adicionar.php">

        <h1 class="text-center m-3">Cadastro pessoa Física</h1>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
          </div>
          <div class="form-group col-md-6">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="idade">Data Nascimento:</label>
            <input type="date" class="form-control" id="idade" name="nascimento" placeholder="Data Nascimento">
          </div>

          <div class="form-group col-md-4">
            <label for="telefone">Telefone:</label>
            <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
          </div>

          <div class="form-group col-md-8 d-flex align-items-end">
            <button type="button" id="submitCEP" class="btn btn-outline-info btn-lg ">Pesquisar</button>
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
      
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Declaro que os dados fornecidos são de extrema veracidade.</label>
        </div>

        <button type="submit" class="btn btn-outline-info mt-3">Salvar</button>
      </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>