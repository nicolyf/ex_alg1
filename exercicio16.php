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
    		<form name="form1" method="post" action="processa_exercicio16.php">
           <legend>
                <span class="numero">1</span>
                Exerc�cio 16
            </legend>
              <span class="enunciado">
                  <span class="enunciado">
                Implemente uma calculadora,
                primeiro pe�a 2 n�meros ao usu�rio (um de cada vez)
                e apresente as seguintes op��es:

                1 - adi��o,
                2 - subtra��o,
                3 - multiplica��o,
                4 - divis�o.

                Mostre o resultado ap�s a opera��o.

              <hr>  
              <br>
              <br>
              </span>
          Opera��o: <select name="operacao">
                        <option value="0">Selecione uma Opera��o</option>
                        <option value="1">1 - Adi��o</option>
                        <option value="2">2 - Subtra��o</option>
                        <option value="3">3 - Multiplica��o</option>
                        <option value="4">4 - Divis�o</option>
                    </select>
                <br> 
          N�mero 1: <input type="text" name="numero1" /> 
                <br>
          N�mero 2: <input type="text" name="numero2" />  -
                <br>
              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
