<?php
/**
 * Created by PhpStorm.
 * User: Owl
 * Date: 29/07/2018
 * Time: 23:49
 */
?>

<html>
<head>
<meta charset="UTF-8">

    <title> Cadastre-se caminhoneiro </title>

</head>
<body>

  <form name="dadosUser" action="conexao.php" method="POST">
    <table border="1">
        <tbody>

        <tr>
            <td> Nome: </td>
            <td> <input type="text" name="nome" placeholder="Nome" /> </td>
        </tr>
        <tr>
            <td> Nascimento: </td>
            <td> <input type="date" name="nascimento" /> </td>
        </tr>
        <tr>
            <td> Endereço: </td>
            <td> <input type="text" name="endereco" placeholder="Endereço" />
        </tr>
        <tr>
            <td> Telefone: </td>
            <td> <input type="text" name="telefone" placeholder="N° Telefone" />
            </td>
        </tr>
        <tr>
            <td> E-mail: </td>
            <td> <input type="email" name="email" placeholder="E-mail" /> </td>
        </tr>
        <tr>
            <td> Senha </td>
            <td> <input type="password" name="senha" placeholder="Senha" /> </td>
        </tr>
        <tr>
            <td> <input type="hidden" name="acao"     value="inserir" /> </td>
            <td> <input type="submit" value="Enviar"  name="Enviar"   /> </td>
        </tr>
        </tbody>
    </table>
  </form>

</body>
</html>
