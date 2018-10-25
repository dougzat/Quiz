<?php 
session_start(); //Inicia a sessão na página
?>


<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css"> <!-- Importa/Vincula o CSS -->
<head>
	<title>FORMULÁRIO</title>
</head>
<body>

	<div class="containerzin"> <!-- Container para exibir as informações da página -->
		<form method="get" action="q2s.php"> <!-- Formulário pega a resposta da questão e envia para a próxima página -->
			"Dois compadres viajavam de carro por uma estrada de fazenda quando um bicho cruzou a frente do carro. Um dos compadres falou:<br>
			- Passou um Iargato ali!<br>
			O outro perguntou:<br>
			- Lagarto ou largato?<br>
			O primeiro respondeu:<br>
			- Num sei não, o bicho passou muito rápido."<br><br>

			<b>01) Na piada, a quebra de expectativa contribui para produzir o efeito de humor. Esse efeito ocorre porque um dos personagens:</b> <br>



			<p> <!-- Caixas de seleção dos itens -->
				<input type= "radio" name="q1" value="A">  reconhece a espécie do animal avistado. <br> <!-- Os itens estão com nome "q1" para identificação -->
				<input type= "radio" name="q1" value="B">  tem duvida sobre a pronuncia do nome do réptil.<br>
				<input type= "radio" name="q1" value="C">  desconsidera o conteúdo linguístico da pergunta. <br>
				<input type= "radio" name="q1" value="D">  constata o fato de um bicho cruzar a frente do carro. <br>
				<input type= "radio" name="q1" value="E">  apresenta duas possibilidades de sentido para a mesma palavra. <br>
			</p>


			<button class="btn btn-green" type="submit" name="submit_button">Enviar</button> <br><br> <!-- Envia os dados do formulário -->

		</form>
		<a href="inicio2.html"><button class="btn btn-green">Voltar</button></a> <!-- Retorna para a página anterior -->
	</div>
</body>
</html>