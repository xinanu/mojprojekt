<?php 
$imie = $_POST['imie']; 
$nazwisko = $_POST['nazwisko']; 

if($imie and $nazwisko) { 

 $dbhost = 'localhost';
 $dbuser = '17_ziobro';
 $dbpass = 'N6g7t8g1w9';
 $dbname = '17_ziobro';
$conn = mysql_connect($dbhost, $dbuser, $dbpass)
or die('Bład połączenia z serwerem: ' . mysql_error());

mysql_select_db($dbname)
or die('Nie ma bazy o nazwie: '.$dbname);

    $wynik = @mysql_query("SELECT nazwa FROM druzyny NATURAL JOIN gracze WHERE imie='$imie' AND nazwisko='$nazwisko'") 
         or die('Błąd w zapytaniu');
        
while ($row = mysql_fetch_array($wynik)) {
  echo '<p>Nazwa wyszukanej drużyny: '.$row[0].'</p>';
}
    mysql_close($conn); 
}
?>
