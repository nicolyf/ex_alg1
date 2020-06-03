<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>Título da Página</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio20.php">
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
						for($i = 1; $i <=(+10); $i++){
							echo $i."<br> ";
						}
						echo "<br";
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>