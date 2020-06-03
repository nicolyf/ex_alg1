<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>Título da Página</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio16.php">
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
						$operacao = $_REQUEST['operacao'];
						$numero1 = $_REQUEST['numero1']; 
						$numero2 = $_REQUEST['numero2']; 
						switch($operacao){
							case 1:
								$resultado = $numero1 + $numero2;
								echo "O resultado é: ".$resultado;
							break;
						
							case 2:
								$resultado = $numero1 - $numero2;
								echo "O resultado é: ".$resultado;
							break;
						
							case 3:
								$resultado = $numero1 * $numero2;
								echo "O resultado é: ".$resultado;
							break;
						
							case 4:
								$resultado = $numero1 / $numero2;
								echo "O resultado é: ".$resultado;
							break;
						}
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>