<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="signo.css">
	<title>QueSignoSerá?</title>
	<meta charset="UTF-8"/>
</head>
<body>
<?php



$data_atual = date ('Y-m-d');
$data_nascimento = date ('Y-m-d', strtotime ('+ 280 days'));

echo " Hoje é dia " . date('d/m/Y',  strtotime($data_atual)) . "<br><br>";

echo "A data provável do nascimento do seu bebê é: " . date('d/m/Y',  strtotime($data_nascimento)) . "<br><br>"; 


$signos = array ();
$aries = array (
	'nome'=> 'Áries',
	'data_inicial'=> '2021-03-21',
	'data_final'=> '2021-04-20'
);

$signos[] = $aries;

$touro = array (
	'nome'=> 'Touro',
	'data_inicial'=> '2021-04-21',
	'data_final'=> '2021-05-20'
);

$signos[] = $touro;

$gemeos = array (
	'nome'=> 'Gêmeos',
	'data_inicial'=> '2021-05-21',
	'data_final'=> '2021-06-20'	
);

$signos[] = $gemeos;

$cancer = array (
	'nome'=> 'Câncer',
	'data_inicial'=> '2021-06-21',
	'data_final'=> '2021-07-22'	
);

$signos[] = $cancer;

$leao = array (
	'nome'=> 'Leão',
	'data_inicial'=> '2021-07-23',
	'data_final'=> '2021-08-22'	
);

$signos[] = $leao;

$virgem = array (
	'nome'=> 'Virgem',
	'data_inicial'=> '2021-08-23',
	'data_final'=> '2021-09-22'	
);

$signos[] = $virgem;

$libra = array (
	'nome'=> 'Libra',
	'data_inicial'=> '2021-09-23',
	'data_final'=> '2021-10-22'	
);

$signos[] = $libra;

$escorpiao = array (
	'nome'=> 'Escorpião',
	'data_inicial'=> '2021-10-23',
	'data_final'=> '2021-11-21'	
);

$signos[] = $escorpiao;

$sagitario = array (
	'nome'=> 'Sagitário',
	'data_inicial'=> '2021-11-22',
	'data_final'=> '2021-12-21'	
);

$signos[] = $sagitario;

$capricornio = array (
	'nome'=> 'Capricórnio',
	'data_inicial'=> '2021-12-22',
	'data_final'=> '2021-01-19'	
);

$signos[] = $capricornio;

$aquario = array (
	'nome'=> 'Aquário',
	'data_inicial'=> '2021-01-20',
	'data_final'=> '2021-02-18'	
);

$signos[] = $aquario;

$peixes = array (
	'nome'=> 'Peixes',
	'data_inicial'=> '2021-02-19',
	'data_final'=> '2021-03-20'	
);

$signos[] = $peixes;

//var_dump($signos);
//exit;

$nascimento = new DateTime($data_nascimento);
$ano_nascimento = $nascimento->format('Y');

foreach($signos as $signo){



	$inicio = new DateTime($signo['data_inicial']);
	$dia_inicio = $inicio->format('d');
	$mes_inicio = $inicio->format('m');
	$data_inicial_formatada = new DateTime($ano_nascimento.'-'.$mes_inicio.'-'.$dia_inicio);


	$fim = new DateTime($signo['data_final']);
	$data_final_formatada = new DateTime($nascimento->format('Y').'-'.$fim->format('m').'-'.$fim->format('d'));

	if ($nascimento >= $data_inicial_formatada && $nascimento <= $data_final_formatada){
		echo "Se você engravidar hoje o signo do seu bebê será: ${signo['nome']}";
	}


	// $data_inicial_formatada = new DateTime($nascimento->format('Y').'-'.$inicio->format('m').'-'.$inicio->format('d'));
	// echo $data_inicial_formatada->format('d/m/Y');



}

 
?>
</body>
</html>	


