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
    		<form name="form1" method="post" action="processa_exercicio13.php">
           <legend>
                <span class="numero">1</span>
                Exerc�cio 13
            </legend>
              <span class="enunciado">
               	A prefeitura de Florian�polis abriu uma linha de cr�dito para os funcion�rios estatut�rios. O valor m�ximo da presta��o n�o poder� ultrapassar 30% do sal�rio bruto. Fa�a um algoritmo que permita entrar com o sal�rio bruto e o valor da presta��o e informar se o empr�stimo pode ou n�o ser concedido.
 
              <hr>  
              <br>
              <br>
              </span>
    
  
          Sal�rio Bruto: <input type="text" name="sb" /> 
                <br>
          Valor da Presta��o: <input type="text" name="vp" /> 
                <br>
              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
