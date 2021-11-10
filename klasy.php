<?php

/*
	class nazwa_klasy{
	//kod...
	}


	class Pojazd{
		public $marka;
		public $kolor;
		public $przebieg;

		function jazda(){
			echo "Przejechano 100km<br>";
			$this->przebieg+=100;
		}

		function malowanie(){
			$this->kolor="czerwony";
			echo "samochód przemalowano<br>";
		}
	}


	$Fiat = new Pojazd();
	$Fiat->kolor="czarny";
	$Fiat->marka="Punto";
	$Fiat->przebieg=150000;
	$Fiat->jazda();
	echo "Kolor przed malowaniem:".$Fiat->kolor."<br>";
	$Fiat->malowanie();

	echo "Marka:".$Fiat->marka."<br>";
	echo "Kolor:".$Fiat->kolor."<br>";
	echo "przebieg:".$Fiat->przebieg."<br>";

*/

	class Osoba{
		public $imie;
		public $nazwisko;
		public $rok_urodzenia;

		function wypisz(){
			echo $this->imie;
			echo $this->nazwisko;
			echo $this->rok_urodzenia;
		}

		function osiemnascie(){
			if (2021 - $this->rok_urodzenia >= 18) {
				echo "Osoba jest pełnoletnia";
			} else {
				echo "osoba jest niepełnoletnia";
			}
			
		}
	}

	$Czlowiek = new Osoba();
	$Czlowiek->imie="Ivan";
	$Czlowiek->nazwisko="Ivanov";
	$Czlowiek->rok_urodzenia=1969;

	echo "imię:".$Czlowiek->imie."<br>";
	echo "nazwisko:".$Czlowiek->nazwisko."<br>";
	echo "rok urodzenia:".$Czlowiek->rok_urodzenia."<br>";

	$Czlowiek->osiemnascie();
	echo "<br>";

	$Zmywara = new Osoba();
	$Zmywara->imie="Julka";
	$Zmywara->nazwisko="Weebska";
	$Zmywara->rok_urodzenia=2007;

	echo "imię:".$Zmywara->imie."<br>";
	echo "nazwisko:".$Zmywara->nazwisko."<br>";
	echo "rok urodzenia:".$Zmywara->rok_urodzenia."<br>";

	$Zmywara->osiemnascie();
?>