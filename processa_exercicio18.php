<html>
	<head>
		<link rel="stylesheet" type="text/css" href="folha_estilo.css">
		<title>Título da Página</title>
	</head>
	<body>
		<div class="classe01">
			<form name="form1" method="post" action="exercicio18.php">
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
						$nome = $_POST['nome'];
						$preco = $_POST['preco'];
						$categoria = $_POST['categoria'];
						switch($categoria){
							case 'A':
								$desconto = $preco - ($preco * 0.1); 
								echo "O valor a pagar é ".$desconto;
							break;

							case 'B':
								$desconto = $preco - ($preco * 0.15);
								echo "O valor a pagar é ".$desconto;            
							break;

							case 'C':
								$desconto = $preco - ($preco * 0.20); 
								echo "O valor a pagar é ".$desconto;
							break;

							case 'D':
								$desconto = $preco - ($preco * 0.2); 
								echo "O valor a pagar é ".$desconto;
							break;

							case 'E':
								$desconto = $preco - ($preco * 0.5); 
								echo "O valor a pagar é ".$desconto;
							break;   
						}
					?>
				</span>
				<input name="botao" type="submit" value=" Voltar" />
			</form>
		</div>
	</body>
</html>