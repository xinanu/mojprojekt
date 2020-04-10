<h2>Krystyna Ziobro gr. 2<h2>

 <h1>Dodaj Czytelnika</h1>
<form action="dodajCzytelnika.php" method="post">
<input type="text" name="imieCzytelnika" placeholder="Podaj imie"><br>
<input type="text"  name="nazwiskoCzytelnika" placeholder="Podaj nazwisko"><br>
<input type="text" name="miasto" placeholder="Podaj miasto"><br>
<input type="submit" name="submit">    
</form>
 
 
 
 <?php include "connection.php";

    if(isset($_POST['submit'])) 
    {
       
        $imieCzytelnika= $_POST['imieCzytelnika'];
		$nazwiskoCzytelnika= $_POST['nazwiskoCzytelnika'];
		$miasto= $_POST['miasto'];
		  
        $query = "INSERT INTO czytelnicy(imieCzytelnika, nazwiskoCzytelnika, miasto)";
        $query.= "VALUES ('$imieCzytelnika', '$nazwiskoCzytelnika', '$miasto')";   
        $result=mysql_query($query);
        if (!$result) {die('Query failed: ' . mysql_error());}
    }
    ?>
	
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
   