<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>T�tulo da P�gina</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio13.php">
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
						$salario = $_REQUEST['sb'];
						$prestacao = $_REQUEST['vp'];

						if($prestacao < ($salario * 0.3)){
							echo "Seu empr�stimo foi aceito!";
						}
						else{
							if($prestacao > ($salario * 0.3)){
								echo "Seu empr�stimo foi negado.";
							}
						}
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>