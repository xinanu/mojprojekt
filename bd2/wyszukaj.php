<html>
    <head>
    <title>wyszukaj</title>
    </head>
    <body>

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

?>
<form action="wyszukaj.php" method="post">
  Imię: <input name="imie"><br>
  Nazwisko: <input name="nazwisko"><br>
    <input type="submit" value="Wyszukaj"> 
        
 </form>
    
<?php
if(($_POST['imie']!="")&&($_POST['nazwisko']!=""))
{
    echo '<table border=1>';
    
    $wynik=mysql_query("SELECT druzyny.nazwa FROM druzyny JOIN gracze on druzyny.druzyna_id=gracze.druzyna_id WHERE gracze.imie='".$_POST['imie']."' and gracze.nazwisko='".$_POST['nazwisko']."';");
   
    while ($row=mysql_fetch_array($wynik))
{
    echo '<tr>';
    echo '<td>'.$row['nazwa'].'</td>';
    echo '</tr>';
}
    echo '</table>';
}
            
?>
    </body>
    </html>



