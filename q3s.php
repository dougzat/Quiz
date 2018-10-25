<?php
session_start(); //Inicia a sessão na página

$q2 = $_GET ['q2']; // Pega os dados do formulário da página anterior e armazena na variável
$_SESSION ['s2'] = $q2; // Armazena, no servidor/sessão, os dados da questão anterior
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
		<form method="get" action="q4s.php"> <!-- Formulário pega a resposta da questão e envia para a próxima página -->
			Empresa vai fornecer 230 turbinas para o segundo complexo de energia a base de ventos, no sudeste da Bahia. O Complexo Eolico Alto Sertão, em 2014, terá capacidade para gerar 375 MW (megawatts), total suficiente para abastecer uma cidade de 3 milhões de habitantes.
			<br><br>


			<b>03) A opção tecnologica retratada na notícia proporciona a seguinte consequência para o sistema energético brasileiro:</b>

			<p>
				<input type= "radio" name="q3" value="A">  Redução da utilização elétrica. <br> <!-- Os itens estão com nome "q3" para identificação -->
				<input type= "radio" name="q3" value="B">  Ampliação do uso bioenergético.<br>
				<input type= "radio" name="q3" value="C">  Expansão das fontes renováveis. <br>
				<input type= "radio" name="q3" value="D">  Contenção da demanda urbano-industrial.<br>
				<input type= "radio" name="q3" value="E">  Intensificação da dependència geotérmica.<br>
			</p>

			<br>

			<button class="btn btn-green" type="submit" name="submit_button">Enviar</button> <br><br> <!-- Envia os dados do formulário -->

		</form>
		<a href="q2s.php"><button class="btn btn-green">Voltar</button></a> <!-- Retorna para a página anterior -->
	</div>
</body>
</html>