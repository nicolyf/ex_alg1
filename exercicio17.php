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
    		<form name="form1" method="post" action="processa_exercicio17.php">
           <legend>
                <span class="numero">1</span>
                Exerc�cio 17
            </legend>
              <span class="enunciado">
Implemente um algoritmo em JAVA que escreva a seguinte mensagem na tela, substituindo a profiss�o pela informada pelo usu�rio:<br>

"Tib�rcio � <profiss�o>"<br>

Solicite ao usu�rio que informe a profiss�o do Tib�rcio, apresente as seguintes op��es:

e - engenheiro,
p - programador,
m - m�dico,
a - advogado,
d - designer.

Se informada op��o diferente das apresentadas a profiss�o �
DESEMPREGADO.


              <hr>  
              <br>
              <br>
              </span>
          Profiss�o: <select name="profissao">
                        <option value="0">Selecione uma Profiss�o</option>
                        <option value="e">e - engenheiro</option>
                        <option value="p">p - programador</option>
                        <option value="m">m - m�dico</option>
                        <option value="a">a - advogado</option>
                        <option value="d">d - designer</option>
                    </select>
                <br> 

              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
