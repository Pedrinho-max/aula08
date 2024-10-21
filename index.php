 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset"UTF-8">
    <meta name="viewport content"="width-device-width, initial-scale=1.0">
    <title>Aula 8</title>
</head>
<body>
      <h1>Introdução á programação backend</h1>
      <?php> 
    
     echo  'Olá, Pedro' ;
     ?>

    //cria uma variável ano_nascimento
    $ano_nascimento = 2005;
    //Cria uma variável chamada ano_nascimento e o ano em que estamos
    $ano_atual = 2024;

    //Criamos uma variável para armazenar a idade da pessoa
    //Realizamos um cálculo de subtração entre o anua atual e a de nascimento
    $idade = $ano_atual - $ano_nascimento;

    //Exibimos a idade da pessoa
    //No PHP o caracter ponto "." concatena(junta) strings.
    echo 'Você possui ', $idade . ' anos.'
    

</body>
</html>