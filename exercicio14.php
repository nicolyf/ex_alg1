<?php

include_once("index.php");

?>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="folha_estilo.css">
    	<title>T�tulo da P�gina</title>
    </head>
    <body>
      <div class="classe01">
    		<form name="form1" method="post" action="processa_exercicio14.php">
           <legend>
                <span class="numero">1</span>
                Exerc�cio 14
            </legend>
              <span class="enunciado">
                Solicitar o ano de nascimento de uma pessoa e o ano atual. Verifique se o ano de nascimento � v�lido, ou seja, se o ano de nascimento � menor que o ano atual, ent�o mostre a idade desta pessoa.

 
              <hr>  
              <br>
              <br>
              </span>
    
  
          Ano de Nascimento: <input type="text" name="an" /> 
                <br>
          Ano Atual:<br> <input type="text" name="aa" /> 
                <br>
              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
