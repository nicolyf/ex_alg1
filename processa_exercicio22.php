<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>T�tulo da P�gina</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio22.php">
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
						$media = 0.0;
						$soma = 0.0;
						$i = 0;
						while($i<=1000){
							$soma = $soma + $i;  
							$i++;
						}
						echo "Soma: ".$soma. "<br>";
						$media = $soma / 1000;
						echo "M�dia: ".$media. "<br>";
						echo "<br>";
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>