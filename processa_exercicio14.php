<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>T�tulo da P�gina</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio14.php">
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
						$nascimento = (int) $_POST['an'];
						$anoatual = (int) $_POST['aa'];
						if ($nascimento < $anoatual){
							$idade = $anoatual - $nascimento;
							echo "Voc� tem " .$idade." anos";
						}
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>