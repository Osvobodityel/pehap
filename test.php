<?php
/*
$x=rand(1,100);
for ($y=0; $y <$x ; $y++) { 
	echo "Δ";
}
*/
/*
$tablica=array(1,4,69,78,23,3);
echo $tablica[3];
$tablica[]=100;
echo $tablica[6];
$tablica[1]=200;
echo $tablica[1];*/

/*
echo "<h1>tablica nieposortowana</h1>";
for ($i=0; $i <10 ; $i++) { 
	$tab[]=rand(1,100);
	echo $tab[$i].", ";
}


echo "<h1>tablica posortowana rosnąco</h1>";
sort($tab);
for ($i=0; $i <10 ; $i++) { 
	echo $tab[$i].", ";
}


echo "<h1>tablica posortowana malejąco</h1>";
rsort($tab);
for ($i=0; $i <10 ; $i++) { 
	echo $tab[$i].", ";
}

$tablica=array(klucz1=>element1, klucz2=>element2);
$tablica[klucz3]=element3;

$auto["marka"]="fiat";
$auto["kolor"]="biały";
$auto["km"]=150000;
print_r($auto);
echo "sortowanie po wartościach<br>";
asort($auto);
echo "<br>";
print_r($auto);
echo "<br>";
echo "sortowanie po kluczach<br>";
ksort($auto);
print_r($auto);*/

function tabelka($a,$b) {
	$w=0;
	for ($i=0; $i < 100; $i++) { 
		$tab[]=rand($a,$b);
		echo $tab[$i].",";
		$w+=$tab[$i];

	}
	echo "=".$w;
}
tabelka(2,100);



?>