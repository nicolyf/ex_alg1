<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>Título da Página</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio17.php">
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
					$profissao = $_REQUEST['profissao']; // poderia vir de uma interface por $_POST[]
					$profissao = substr($profissao, 0,1); // retira a primeira letra
					switch($profissao){
						case 'e':
							echo "Tibúrcio é engenheiro!";
						break;

						case 'p':
							echo "Tibúrcio é programador!";
						break;

						case 'm':
							echo "Tibúrcio é médico!";
						break;

						case 'a':
							echo "Tibúrcio é advogado!";
						break;

						case 'd':
							echo  "Tibúrcio é designer!";
						break;

						default:
							echo "Tibúrcio é desempregado."
						break;
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>