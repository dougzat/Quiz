<link rel="stylesheet" type="text/css" href="style.css"> <!-- Importa/Vincula o CSS -->
<div class="containerzin"> <!-- Container para exibir as informações da página -->

	<?php 
	session_start(); //Inicia a sessão na página

	$q4 = $_GET['q4']; // Pega os dados do formulário da página anterior e armazena na variável

	$S1 = $_SESSION['s1']; //Pega os dados armazenados na sessão e armazena numa variável
	$S2 = $_SESSION['s2']; //Pega os dados armazenados na sessão e armazena numa variável
	$S3 = $_SESSION['s3']; //Pega os dados armazenados na sessão e armazena numa variável

	$q1r = 0; //Cria uma variável para armazenar a correção da resposta da questão
	$q2r = 0; 
	$q3r = 0; 
	$q4r = 0; 

//NOTA DO QUIZ

	$n = 0; //Cria um contador para armazenar os acertos do quiz

	if ($S1 == 'C') { //Compara os dados da sessão com a resposta
		$q1r = " (Correto)"; //Armazena a correção na variável
		$n++; //Adiciona +1 no contador
	}else{
		$q1r = " (Incorreto)"; //Armazena a correção na variável, caso seja errada
	}

	if($S2 == 'E'){
		$q2r = " (Correto)";
		$n++;
	}else{
		$q2r = " (Incorreto)";
	}

	if ($S3 == 'C') {
		$q3r = " (Correto)";
		$n++;
	}else{
		$q3r = " (Incorreto)";
	}

	if ($q4 == 'E') {
		$q4r = " (Correto)";
		$n++;
	}else{
		$q4r = " (Incorreto)";
	}


//RESPOSTAS NULAS

	if ($S1 == ''){ //Compara os dados da sessão com a resposta
		$q1r = "<b>Em branco!</b>"; //Armazena uma mensagem na variável
	}
	if ($S2 == ''){
		$q2r = "<b>Em branco!</b>";
	}
	if ($S3 == ''){
		$q3r = "<b>Em branco!</b>";
	}
	if ($q4 == ''){
		$q4r = "<b>Em branco!</b>";
	}

//NOTA
	echo "<h2>Seu resultado foi:</h2>";

	echo "Você acertou ", $n,"/4 questões.";


//SUAS RESPOSTAS
	echo "<br><br><h2>Suas respostas foram:</h2>", "1- ", $S1, $q1r, "<br>", "2- ", $S2, $q2r, "<br>", "3- ", $S3, $q3r, "<br>", "4- ", $q4, $q4r, "<br>";

	?>

	<br><a href="inicio2.html"><button class="btn btn-green">REINICIAR</button></a> <!-- Retorna para a página inicial -->
</div>