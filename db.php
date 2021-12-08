<?php 
	
	$com=mysqli_connect("localhost", "root", "", "rejestracja")or die("Nie można połączyć się z bazą danych");

	$zap="select * from dane";
	$zap2="Insert into dane values (NULL, 'Jan', 'Bak')";
	$wynik=mysqli_query($com, $zap);
	while($k=mysqli_fetch_array($wynik)){
		echo $k['imie'];
	}
	mysqli_close($com);

?>