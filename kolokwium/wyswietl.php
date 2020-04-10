
<h1>ksiazki</h1>
<?php include "connection.php";

$query= "SELECT * FROM ksiazki";

$result= mysql_query($query);

while($row=mysql_fetch_array($result))
{
    echo'<table border=1>';
    echo'<tr>';
    echo '<td>'.$row['idKsiazki'].'</td>';
    echo '<td>'.$row['tytul'].'</td>';
	echo '<td>'.$row['imieAutora'].'</td>';
	echo '<td>'.$row['nazwiskoAutora'].'</td>';
	echo '<td>'.$row['rokWydania'].'</td>';
    echo'</tr>';
    echo'</table>';
}
 
 if (!$result) {die('Query failed: ' . mysql_error());}
    

?>
<br>
<h1>czytelnicy</h1>
<?php include "connection.php";

$query= "SELECT * FROM czytelnicy";

$result= mysql_query($query);

while($row=mysql_fetch_array($result))
{
    echo'<table border=1>';
    echo'<tr>';
    echo '<td>'.$row['idCzytelnika'].'</td>';
    echo '<td>'.$row['imieCzytelnika'].'</td>';
	echo '<td>'.$row['nazwiskoCzytelnika'].'</td>';
	echo '<td>'.$row['miasto'].'</td>';
    echo'</tr>';
    echo'</table>';
}
 
 if (!$result) {die('Query failed: ' . mysql_error());}
    

?>