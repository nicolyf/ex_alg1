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
    		<form name="form1" method="post" action="processa_exercicio7.php">
            <legend>
                <span class="numero">1</span>
                Exerc�cio 7
            </legend>
              <span class="enunciado">
                Escreva um programa em PHP que solicite ao usu�rio um nome, armazene em uma vari�vel e depois mostre o nome digitado em uma mensagem. 
              <hr>  
              <br>
              <br>
              </span>
    			Nome: <input type="text" name="nome" id="nome" /> 
              	<br>
              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
