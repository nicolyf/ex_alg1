<html>
    <head>
      <link rel="stylesheet" type="text/css" href="folha_estilo.css">
      <title>T�tulo da P�gina</title>
    </head>
    <body>
      <div class="classe01">
        <form name="form1" method="post" action="exercicio12.php">
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
    
			$numero1 = $_REQUEST['a'];
			$numero2 = $_REQUEST['b'];

			if ($numero1 > $numero2){
				echo "O maior n�mero �: ".$numero1;
			}
			else{
				if ($numero2 > $numero1){
					echo "O maior n�mero �: ".$numero2;
				}
				else{
					echo "Os n�meros s�o iguais!";
				}
			}
		?>
    </span>
        <input name="botao" type="submit" value="< Voltar" />
		</form>
		</div>
    </body>
</html>