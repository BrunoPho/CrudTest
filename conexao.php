<?php
/**
 * Created by PhpStorm.
 * User: Owl
 * Date: 30/07/2018
 * Time: 13:26
 */
  if(isset($_POST["acao"])){
      if ($_POST["acao"] == "inserir") {
          inserirUser();

      }
  }

  function abrirBanco(){
      $conexao = new mysqli("localhost", "root", "root", "crudcadastro");
      return $conexao;
}

  function inserirUser(){
     $banco = abrirBanco();
     $sql   = "INSERT INTO user(nome, nascimento, endereco, telefone, email, senha)"
               . " VALUES ('{$_POST["nome"]}', '{$_POST["nascimento"]}', '{$_POST["endereco"]}', '{$_POST["telefone"]}', '{$_POST["email"]}', '{$_POST["senha"]}')";
     $banco->query($sql);
     $banco->close();
     voltarIndex();
  }

  function selectaAllUser(){
      $banco = abrirBanco();
      $sql = "SELECT *FROM user ORDER BY nome";
      $resultado = $banco->query($sql);
      while ($row = mysqli_fetch_row($resultado)){
          $grupo[] = $row;
      }
     return $grupo;
  }

function voltarIndex(){

    header('Location: index.php');
}