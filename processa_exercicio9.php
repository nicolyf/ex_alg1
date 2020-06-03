
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>Título da Página</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio9.php">
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
						$massa  = (int) $_POST ['massa'];
						$altura = (double) $_POST ['altura'];
						$imc    = $massa / ($altura + $altura);
						echo "<b> O seu IMC É: </b>";
						echo $imc;
						echo "<br><br>"; 
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>