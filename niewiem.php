<?php 
/*
	fopen("nazwa_pliku", tryb);  otwarcie pliku
	

	tryb		opis
	a 			otwiera plik do zapisu, dopisuje na końcu
	a+			otwiera plik do zapisu i odczytu, dopisuje na końcu
	r 			otwiera plik do odczytu
	r+			otwiera plik do odczytu i zapisu, dopisuje na początek
	w 			otwiera plik do zapisu, jeżeli plik istnieje to zostanie nadpisany, jeżeli pliku nie ma to php spróbuje go utworzyć
	w+			otwiera plik do odczytu, jeżeli plik istnieje to zostanie nadpisany, jeżeli pliku nie ma to php spróbuje go utworzyć


	fwrite(otwarcie_pliku, "ciąg do zapisu");
	fputs(otwarcie_pliku, "ciąg do zapisu");

	fclose(otwarcie_pliku);



	while(!feof(otwarcie_pliku)){
	fgets(otwarcie_pliku, wartość);
	}


	freadfile(nazwa_pliku);
*/

	$plik=fopen("plik.txt", "w+");
	fputs($plik, "<pre>Dobry programista \n to człowiek</pre>");
	fclose($plik);

	$plik=fopen("plik.txt", "r");
	while($wiersz=fgets($plik)){
		echo $wiersz;
	}
	fclose($plik);

?>