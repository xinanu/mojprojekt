<html>
<head> 
    <title>wyszukaj</title> </head> <body>
<?php
    
$dbhost = 'localhost';
$dbuser = '17_ziobro';
$dbpass = 'N6g7t8g1w9';
$dbname = '17_ziobro'; 
$conn = mysql_connect($dbhost, $dbuser, $dbpass) 
or die('Bład połączenia z serwerem: ' . mysql_error()); 


mysql_select_db($dbname) or die('Nie ma bazy o nazwie: '.$dbname);
mysql_set_charset('utf8');

     if ($_GET['usun']==1) mysql_query("DELETE FROM gracze 
     WHERE gracz_id=".$GET['gracz_id'].";");
      
?>
    

<table border="1">


<?php

$wynik = mysql_query('SELECT * FROM gracze');
 while ($row = mysql_fetch_array($wynik)) {
  echo '<tr bgcolor="red">';
  echo '<td>'.$row['imie'].'</td>';
  echo '<td>'.$row['nazwisko'].'</td>';
  echo '<td>'.$row['druzyna_id'].'</td>';
  echo '<td>'.$row['numer'].'</td>';
  echo '<td> <a href="zmien.php?gracz_id='.$row['gracz_id'].'"> 
      Edytuj
      </a> </td>';
  echo '<td> <a href="prezentacja.php?gracz_id='.$row['gracz_id'].'&usun=1"> 
      Potwierdz
      </a> </td>';
  echo '</tr>';
    
}

?>

</table>

</body>

</html>
