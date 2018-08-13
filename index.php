<?php

   include ("conexao.php");
   $grupo  = selectaAllUser();
   var_dump($grupo);

?>

<html>
<head>

    <title> Perfil </title>

</head>
<body>

  <h1> CrudCadastro </h1>

<a href="inserir.php" > Add User </a>

    <table border="1">
        <thead>
           <tr>
               <th> Nome       </th>
               <th> Nascimento </th>
               <th> Endereço   </th>
               <th> Telefone   </th>
               <th> Email      </th>
               <th> Senha      </th>
               <th> Editar     </th>
               <th> Excluir    </th>
           </tr>
        </thead>
        <tbody>

        <?php

        foreach ($grupo as $pessoa){
           echo $pessoa;
        }
         ?>

          <tr>
              <td> <?= $pessoa ["nome"]       ?> </td>
              <td> <?= $pessoa ["nascimento"] ?> </td>
              <td> <?= $pessoa ["endereco"]   ?> </td>
              <td> <?= $pessoa ["telefone"]   ?> </td>
              <td> <?= $pessoa ["email"]      ?> </td>
              <td> <?= $pessoa ["senha"]      ?> </td>
              <td> Editar                        </td>
              <td> Excluir                       </td>
          </tr>
        </tbody>
    </table>

</body>
</html>
