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

    
$wynik=mysql_query("SELECT * FROM ogloszenia 
WHERE login='".$_GET['login']."'");
    while ($row = mysql_fetch_array($wynik))
    {
         echo '<form action="">';
  echo 'ogloszenie: <input name="ogloszenie" value="'.$row['ogloszenie'].'"><br>';
  echo 'login: <input name="login" value="'.$row['login'].'"><br>';
  echo '<input type="hidden" name ="zmien" value="1">';
  echo '<input type="submit" value="zapisz">';
  echo '</form>';
    }
    }
   
    else 
    {
        $wynik=mysql_query("UPDATE ogloszenia SET ogloszenie='".$_GET['ogloszenie']."'
        WHERE login='".$_GET['login']."'");
    }
    echo '<a href="ogloszenie.php"> Powrot do tabeli</a>';
    ?>

</body>

</html>