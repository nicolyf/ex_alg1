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
    		<form name="form1" method="post" action="processa_exercicio15.php">
           <legend>
                <span class="numero">1</span>
                Exerc�cio 15
            </legend>
              <span class="enunciado">
                Solicitar nome e idade de uma pessoa.
                Se a pessoa possuir idade entre 15 e 25 anos, imprimir o nome e a mensagem: ACEITAR.
                Caso contr�rio, imprimir o nome e a mensagem: N�O ACEITAR.

 
              <hr>  
              <br>
              <br>
              </span>
    
  
          Nome: <input type="text" name="nome" /> 
                <br>
          Idade:<input type="text" name="idade" /> 
                <br>
              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
