<?php
session_start(); //Inicia a sessão na página

$q3 = $_GET ['q3']; // Pega os dados do formulário da página anterior e armazena na variável
$_SESSION ['s3'] = $q3; // Armazena, no servidor/sessão, os dados da questão anterior
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
		<form method="get" action="todasS.php"> <!-- Formulário pega a resposta da questão e envia para a próxima página -->
			<b>04) O chuveiro elétrico e um dispositivo capaz de transformar energia elétrica em energia térmica, o que possibilita a elevação de temperatura da água. Um chuveiro projetado para funcionar em 110 V pode ser adaptado para funcionar em 220 V de modo a manter inalterada sua potència. Uma das maneiras de fazer esta adaptação e trocar a resistência do chuveiro por outra de mesmo material e com o(a):</b>
			<br>


			<p>
				<input type= "radio" name="q4" value="A">  Dobro do comprimento do fio. <br> <!-- Os itens estão com nome "q4" para identificação -->
				<input type= "radio" name="q4" value="B">  Metade do comprimento do fio.<br>
				<input type= "radio" name="q4" value="C">  Metade da área de seção reta do fio.<br>
				<input type= "radio" name="q4" value="D">  Quadruplo da área de seção reta do fio.<br>
				<input type= "radio" name="q4" value="E">  Quarta parte da área da seção reta do fio.<br>
			</p>

			<br>

			<button class="btn btn-green" type="submit" name="submit_button">Enviar</button> <br><br><!-- Envia os dados do formulário -->

		</form>
		<a href="q3s.php"><button class="btn btn-green">Voltar</button></a> <!-- Retorna para a página anterior -->

	</div>
</body>
</html>