

<html>
    <head>
      <link rel="stylesheet" type="text/css" href="folha_estilo.css">
    	<title>T�tulo da P�gina</title>
    </head>
    <body>
      <div class="classe01">
      	<form name="form1" method="post" action="exercicio8.php">
      	<legend>
          <span class="numero">2</span>
          Resposta
        </legend>
         <span class="enunciado">



              <hr>  
              <br>
              <br>
          </span>
      	<br> 
    <span class="resposta">
		<?php

			$numero1  = $_POST ['numero1'];
			$numero2	= $_POST ['numero2'];
			$soma		= $numero1 + $numero2;
			echo "<b> O resultado da soma �: </b>";
			echo $soma;
			echo "<br><br>"; 
		?>
    </span>
        <input name="botao" type="submit" value="< Voltar" />
		</form>
		</div>
    </body>
</html>