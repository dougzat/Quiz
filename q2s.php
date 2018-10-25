<?php
session_start(); //Inicia a sessão na página

$q1 = $_GET ['q1']; // Pega os dados do formulário da página anterior e armazena na variável
$_SESSION ['s1'] = $q1; // Armazena, no servidor/sessão, os dados da questão anterior
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
		<form method="get" action="q3s.php"> <!-- Formulário pega a resposta da questão e envia para a próxima página -->
			A Secretaria de Saúde de um município avalia um programa que disponibiliza, para cada aluno de uma escola municipal, uma bicicleta, que deve ser usada no trajeto de ida e volta, entre sua casa e a escola. Na fase de implantação do programa, o aluno que morava mais distante da escola realizou sempre o mesmo trajeto, representado na figura, na escala 1:25 000, por um período de cinco dias.<br>

			<a> 
				<center><img align="top" src="https://www.enemvirtual.com.br/uploadedfiles/uploads/2013/12/enem-matematica-300x263.jpg" height="120" width="180"> </center>
			</a>
			<b>02) Quantos quilômetros esse aluno percorreu na fase de implantação do programa?</b>

			<p>
				<input type= "radio" name="q2" value="A"> 4 <br> <!-- Os itens estão com nome "q2" para identificação -->
				<input type= "radio" name="q2" value="B"> 8 <br>
				<input type= "radio" name="q2" value="C"> 16 <br>
				<input type= "radio" name="q2" value="D"> 20 <br>
				<input type= "radio" name="q2" value="E"> 40 <br>
			</p>


			<button class="btn btn-green" type="submit" name="submit_button">Enviar</button> <br><br> <!-- Envia os dados do formulário -->
			
		</form>
		<a href="q1s.php"><button class="btn btn-green">Voltar</button></a> <!-- Retorna para a página anterior -->
	</div>
</body>
</html>