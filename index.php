<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="signo.css">
	<title>QueSignoSerá?</title>
	<meta charset="UTF-8"/>
</head>
<body>
<?php



$data_atual = date ('d/m/Y');
$data_nascimento = date ('d/m/Y', strtotime ('+ 280 days'));


$signos = array ();
$aries = array (
	'nome'=> 'aries',
	'data_inicial'=> '21/03/2021',
	'data_final'=> '20/04/2021'
);

$signos[] = $aries;

$touro = array (
	'nome'=> 'touro',
	'data_inicial'=> '21/04/2021',
	'data_final'=> '20/05/2021'
);

$signos[] = $touro;

$gemeos = array (
	'nome'=> 'gemeos',
	'data_inicial'=> '21/05/2021',
	'data_final'=> '20/06/2021'	
);

$signos[] = $cancer;

$cancer = array (
	'nome'=> 'gemeos',
	'data_inicial'=> '21/06/2021',
	'data_final'=> '22/07/2021'	
);

$signos[] = $cancer;

$leao = array (
	'nome'=> 'leao',
	'data_inicial'=> '23/07/2021',
	'data_final'=> '22/08/2021'	
);

$signos[] = $leao;

$virgem = array (
	'nome'=> 'virgem',
	'data_inicial'=> '23/08/2021',
	'data_final'=> '22/09/2021'	
);

$signos[] = $virgem;

$libra = array (
	'nome'=> 'libra',
	'data_inicial'=> '23/09/2021',
	'data_final'=> '22/10/2021'	
);

$signos[] = $libra;

$escorpiao = array (
	'nome'=> 'escorpiao',
	'data_inicial'=> '23/10/2021',
	'data_final'=> '21/11/2021'	
);

$signos[] = $escorpiao;

$sagitario = array (
	'nome'=> 'sagitario',
	'data_inicial'=> '22/11/2021',
	'data_final'=> '21/12/2021'	
);

$signos[] = $sagitario;

$capricornio = array (
	'nome'=> 'capricornio',
	'data_inicial'=> '22/12/2021',
	'data_final'=> '19/01/2021'	
);

$signos[] = $capricornio;

$aquario = array (
	'nome'=> 'aquario',
	'data_inicial'=> '20/01/2021',
	'data_final'=> '18/02/2021'	
);

$signos[] = $aquario;

$peixes = array (
	'nome'=> 'peixes',
	'data_inicial'=> '19/02/2021',
	'data_final'=> '20/03/2021'	
);

$signos[] = $peixes;

//var_dump($signos);
//exit;



 echo " Hoje é dia " . $data_atual . "<br><br>";

 echo "A data provável do nascimento do seu bebê é " . $data_nascimento . "<br><br>"; 

 echo "Se você engravidar hoje o signo do seu bebê será: ";

?>
</body>
</html>	


