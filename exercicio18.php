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
    		<form name="form1" method="post" action="processa_exercicio18.php">
           <legend>
                <span class="numero">1</span>
                Exerc�cio 18
            </legend>
              <span class="enunciado">
Uma loja dar� um desconto em seus produtos de acordo com a categoria de cada produto. <br>
As categorias e os descontos s�o mostrados abaixo:<br>

Categoria Desconto <br>
A             10% <br>
B             15% <br>
C             20% <br>
D             25% <br>
E             50%<br>

Fa�a um algoritmo para ler o nome do cliente, o pre�o e a categoria do produto que o cliente est� comprando. Ap�s aleitura mostrar na tela o pre�o final que o cliente dever� pagar ap�s ter sido dado o desconto no pre�o da mercadoria.



              <hr>  
              <br>
              <br>
              </span>
          Nome: <input type="text" name="nome" /> 
                <br>
          Pre�o: <input type="text" name="preco" />  
                <br>              
          Categoria: <select name="categoria">
                        <option value="0">Selecione uma Categoria</option>
                        <option value="A">A - 10%</option>
                        <option value="B">B - 15%</option>
                        <option value="C">C - 20%</option>
                        <option value="D">D - 25%</option>
                        <option value="E">E - 50%</option>
                    </select>
                <br> 

              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
