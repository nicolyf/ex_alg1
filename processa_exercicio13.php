<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>Título da Página</title>
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
							echo "Seu empréstimo foi aceito!";
						}
						else{
							if($prestacao > ($salario * 0.3)){
								echo "Seu empréstimo foi negado.";
							}
						}
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>