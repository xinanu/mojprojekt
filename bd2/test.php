<?php

$dbhost = 'localhost';
$dbuser = '17_ziobro';
$dbpass = 'N6g7t8g1w9';
$dbname = '17_ziobro';
$conn = mysql_connect($dbhost, $dbuser, $dbpass)
or die('Bład połączenia z serwerem: ' . mysql_error());
echo "Połączenie udane <br>";

mysql_select_db($dbname)
or die('Nie ma bazy o nazwie: '.$dbname);

mysql_set_charset('utf8');



echo "<h1>Gracze: </h1>";

$wynik=mysql_query("SELECT * FROM gracze");
while ($row=mysql_fetch_array($wynik))
{
    echo $row['imie']." ".$row['nazwisko'].'<br>';
}

?>

<table border="1">
  <tr>
    <th>Imie</th>
    <th>Nazwisko</th>
  </tr>

<?php

$gracze = mysql_query('SELECT imie, nazwisko FROM gracze') or die('Błąd w zapytaniu');
while ($row = mysql_fetch_array($gracze)) {
  echo '<tr>';
  echo '<td>'.$row[0].'</td>';
  echo '<td>'.$row[1].'</td>';
  echo '</tr>';
}

?>

</table>
    
