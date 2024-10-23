<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="formulario.php" method="post">
         <label>Digite seu nome:</label>
         <input type="text" name="nome"/>

         <input type="submit" value="enviar para o servidor">
    </form>

    <hr/>

    <?php
        $nome = '';

      if(isset($_POST['nome'])) { //isset é uma função do PHP que verifica se há valor numa variável

      //Estamos atribuindo o valor do campo "nome" digitado no formulário
      //A nossa variávela chamada $nome
     $nome = $POST{'nome'};

     //Estamoos imprimindo á mensagem de boas vindas
     //Concatenamos uma string constante com a variável "$nome"
      echo '<p>Olá,' , $nome .'! Seja bem-vindo(a)<p/>';

      }
    <?>
</body>
</html>