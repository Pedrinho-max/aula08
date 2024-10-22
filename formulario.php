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

      if(isset($_POST['nome'])) {
       echo '<p>Olá ' . $nome.! Sejam bem-vindo(a)'</p>'
      $nome = $POST{'nome'};
      }
    <?>
</body>
</html>