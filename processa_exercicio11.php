<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>T�tulo da P�gina</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio11.php">
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
						if (($numero1 % 2)== 0) {
							echo "� m�ltiplo de 2!";
						}
						else {
							echo "N�o � m�ltiplo de 2!";
						}
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>