<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>Título da Página</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio19.php">
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

						$frase = $_POST['frase'];
						$numero = $_POST['nvezes'];

						for($i = 0; $i <(+$numero); $i++){
						echo " ".$frase;
						}
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>