<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>T�tulo da P�gina</title>
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
							echo "Tib�rcio � engenheiro!";
						break;

						case 'p':
							echo "Tib�rcio � programador!";
						break;

						case 'm':
							echo "Tib�rcio � m�dico!";
						break;

						case 'a':
							echo "Tib�rcio � advogado!";
						break;

						case 'd':
							echo  "Tib�rcio � designer!";
						break;

						default:
							echo "Tib�rcio � desempregado."
						break;
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>