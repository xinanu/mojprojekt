<html>
<head> 
    <title>zmien</title> </head> <body>
<?php
    
$dbhost = 'localhost';
$dbuser = '17_ziobro';
$dbpass = 'N6g7t8g1w9';
$dbname = '17_ziobro'; 
$conn = mysql_connect($dbhost, $dbuser, $dbpass) 
or die('Bład połączenia z serwerem: ' . mysql_error()); 


mysql_select_db($dbname) or die('Nie ma bazy o nazwie: '.$dbname);
mysql_set_charset('utf8');
    
    if($_GET['zmien']!=1)
    {

    
$wynik=mysql_query("SELECT * FROM gracze 
WHERE gracz_id='".$_GET['gracz_id']."'");
    while ($row = mysql_fetch_array($wynik))
    {
         echo '<form action="">';
  echo 'imię: <input name="imie" value="'.$row['imie'].'"><br>';
  echo 'nazwisko: <input name="nazwisko" value="'.$row['nazwisko'].'"><br>';
  echo 'nr druzyny: <input name="druzyna_id" value="'.$row['druzyna_id'].'"><br>';
  echo 'nr gracza: <input name="numer" value="'.$row['numer'].'"><br>';
  echo '<input type="hidden" name="gracz_id" value="'.$row['gracz_id'].'">';
  echo '<input type="hidden" name ="zmien" value="1">';
  echo '<input type="submit" value="zapisz">';
  echo '</form>';
    }
    }
   
    else 
    {
        $wynik=mysql_query("UPDATE gracze SET imie='".$_GET['imie']."', nazwisko='".$_GET['nazwisko']."', druzyna_id='".$_GET['druzyna_id'].", 
        numer='".$_GET['numer']."'
        WHERE gracz_id='".$_GET['gracz_id']."'");
    }
    ?>

</body>

</html>