<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <?php
    /* //esse é um comentario
    echo "Teste";
    #esse também é um comentário
    echo "Teste2";
    /*esse também é um comentário   
    echo "Teste3"; */


    /*$nome = "Camilly";
    $idade = 17;
    echo "O meu nome é: ";
    echo $nome;
    echo "<br>";
    echo "Essa é minha idade: ";
    echo $idade;
    echo "anos.";*/

    $nome = "Camilly";
    $sobrenome = "Duarte";
    $idade = "17";

    echo "O meu nome é".$nome." ".$sobrenome.".<br>E eu tenho ".$idade." anos de vida. ";

    $numero1 = 10;
    $numero2 = 5;

    $soma = $numero1 + $numero2;
    echo "o valor da soma é ".$soma;

    $subtracao = $numero1 - $numero2;
    echo "O valor da subtração é ".$subtracao;

    echo "<br>";

    $multiplicacao = $numero1 * $numero2;
    echo "O valor da multiplicação é ".$multiplicacao;

    $divisao = $numero1 / $numero2;
    echo "O valor da divisão é ".$divisao;

  ?>
</body>
</html>