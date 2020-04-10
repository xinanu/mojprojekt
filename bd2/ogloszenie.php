<html>
    <head>
    <title>ogloszenie</title>
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
 
    <?php
        
    if ($_GET['Usun']==1) mysql_query("DELETE FROM ogloszenia 
    
     WHERE ogloszenia=".$_GET['login'].";");    
        
{
    echo '<table border=1>';
    
    $wynik=mysql_query('SELECT * FROM ogloszenia');
   
    while ($row=mysql_fetch_array($wynik))
{
    echo '<tr>';
    echo '<td>'.$row['ogloszenie'].'</td>';
    echo '<td>'.$row['login'].'</td>';
        
    echo '</tr>';
}
    echo '</table>';
}
    
            
?>

<br>

<form action="ogloszenie.php" method="post">
  Login: <input name="login"><br>
  Haslo: <input name="haslo"><br>
    <input type="submit" value="Zaloguj">
            
 </form>
    
<?php
if(($_POST['login']!="")&&($_POST['haslo']!=""))
{
    echo '<table border=1>';
    
    $wynik=mysql_query("SELECT * FROM ogloszenia JOIN uzytkownicy on uzytkownicy.login=ogloszenia.login WHERE uzytkownicy.login='".$_POST['login']."' and uzytkownicy.haslo='".$_POST['haslo']."';");
   
    while ($row=mysql_fetch_array($wynik))
{
    echo '<tr>';
    echo '<td>'.$row['ogloszenie'].'</td>';
    echo '<td>'.$row['login'].'</td>';
    echo '<td> <a href="ogloszenie.php?login='.$row['login'].'&usun='.$row['login'].'">
      Usun
      </a> </td>';
    echo '<td> <a href="zmien2.php?gracz_id='.$row['gracz_id'].'"> 
      Edytuj
      </a> </td>';
    echo '</tr>';
}
    echo '</table>';
}
            
?>
Rejestracja        
 <form action="ogloszenie.php" method="post">
  Login: <input name="login"><br>
  Haslo: <input name="haslo"><br>
    <input type="submit" value="Zarejestruj">
            
 </form>    
     
<?php  

    /*   if(($_POST['login']!="")&&($_POST['haslo']!=""))
{
    
   $wynik=mysql_query("INSERT INTO uzytkownicy VALUES ('.$_POST['login']', '.$_POST['haslo'].')';";

 }
    */
        
      ?>  
    
        
    </body>
    </html>



