<?php
    $nome = "Dante";
    $idade = 15;
    echo "Meu nome é ".$nome.", e tenho ".$idade." anos.";
    echo "<hr>";
    echo "<center><h2>SENAI - DEVELOPER</h2></center>";
    echo "<hr>";
    $valor1 = 8;
    $valor2 = 11;
    echo "A soma dos valores foi:".$valor1+$valor2."<br>";
    echo "A subtração dos valores foi:".$valor1-$valor2."<br>";
    echo "A multiplicação dos valores foi:".$valor1*$valor2."<br>";
    $result = $valor1/$valor2;
    $numformatado = number_format($result, 2, ',', '.');
    echo "A divisão dos valores foi:".$numformatado;
    echo "<hr>";
    $datahora = date('d/m/Y H:i:s');
    echo "Data atual: ".$datahora;
	echo "<hr>";
	$datahora = date('d/m/Y H:i:s');
	echo "Data atual: ".$datahora;
	echo "<hr>";
	$data1 = new Datetime('2025-01-01');
	//Data: 2025-01-01 22:30:23 = Y-m-d H:i:s
	$data2 = new Datetime('2025-08-06');
	$intervalo = $data1 ->diff($data2);
	echo "A diferença em anos: ".$intervalo->y."<br>";
	echo "A diferença em meses: ".$intervalo->m."<br>";
	echo "A diferença em dias: ".$intervalo->days."<br>";
	$horas = $intervalo->days*24;
	echo "A difereça em horas: ".$horas;
	echo "hr2";
	echo "<hr2>Função Condicional - IF</h2>";
	$a = 8;
	$b = 5;
	if ($a > $b) {
		echo "A é maior que B!";
	} else {
		echo "B é maior que A!";
	}
	echo "<br> Saiu do if";
	echo "<hr>";
	$n1 = 13;
	$n2 = 14;
	$n3 = 8;
	// || significa or(ou)
	// 88 singnifica and(e) 
	// if sngnifica se
	// elsei significa se não
	// else significa se não/outra
	// = 2x singnifica igual e = 1x significa atribuição
	if($n1 > $n2 && $n1 > $n3) {
		echo "A variável ".$n1." é o valor maior!";
	}
	elseif($n2 > $n1 && $n2 > $n3) {
		echo "A variável ".$n2." é o valor maior!";
	}
	else {
		echo "A variável ".$n3." é o valor maior!";
	}
	echo "<hr>";
	// <hr> = linha orizontal
	echo "<center><h2>numeros rondomicos</h2.></center>";
	$num = rand(1, 10);
	$meunum = 6;
	if ($num == $meunum) {
		echo  "O número sorteado foi: ".$meunum." Você ganhou!";
	}
	else{
		echo " O número sorteado foi: ".$num."Você perdeu!";
	}
	// for = para 
	// for (inicio;teste lógico; incremento){código...}
	echo "<hr>";
	for ($i=0; $i < 10 ; $i++) {
		echo "Passagemdo laço for n: ".$i."<br>";
	}
	echo "<h2>Tabuada</h2>";
	$numtab = 5;
	for ($i=1; $i <= 10; $i++){
    echo $numtab." x ".$i."=".$numtab*$i."<br>";
	}
	//while = enquanto 
	// while(teste lógico A > b ) {código.....}
	echo "<hr>";
	echo "<h2>Laço WHILE</h2>";
	$x = 1;
	while ($x < 6) {
		echo "Laço n: ".$x."<br>";
		$x++;
	}
	$a = 0;
	while ($a < 100) {
		echo $a."<br>";
		$a+=10;
	}
	echo "<hr>";
	echo "<h2>foreach,</h2>";
	$cores = array("azul","marrom","bege","amarelo","branco");
	foreach ($cores as $cor) {
		echo $cor."<br>";
	}

?>	

	