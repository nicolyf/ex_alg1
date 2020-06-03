<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>Título da Página</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio23.php">
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
						$n1     = $_POST['inicial'];
						$n2     = $_POST['final'];


						$soma = 0;
						$i = $n1;
						while($i<=$n2){     
							$soma = $soma + $i; 
							$i++;
						}
						echo "Soma: ".$soma. "<br>";  
						echo "<br>";
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>