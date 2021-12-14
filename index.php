<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
<fieldset>
  <legend>Calculadora</legend>
    <label>
   <form method="post" >
      Primeiro Numero: <input name="num1" type="text" required><br>
      Segundo numero: <input name="num2" type="text"><br>
      Idade: <input name="Idade" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">
      <input type="submit" name="operacao" value="Idade">      
   </form> 
   </label>
<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $d =  $_POST['Idade'];
   $op= $_POST['operacao'];



    if( isset($op) ) {
      if($op == '+') {
        $c = $a + $b;
        echo "O resultado da operação: $c";
      }
      else if($op == '-') {
        $c = $a - $b;
        echo "O resultado da operação: $c";
      }
      else if($op == '*') {
        $c = $a*$b;
        echo "O resultado da operação: $c";
      }
      else if ($op == '/') {
        $c = $a/$b;
        echo "O resultado da operação: $c";
      }
      else if ($d == '') {
       echo "Você não informou a Idade";
     }
      else {
        $c = $a + $d;
        echo "O resultado da operação: $c";
      }


   }


?>       
</body>
</html>