 <h2>Krystyna Ziobro gr. 2<h2>
   <h1>Edytuj ksiazke</h1>
<form action="edytujKsiazke.php" method="post">
<input type="text" name="imieAutora" placeholder="Podaj imie"><br>
<input type="text"  name="nazwiskoAutora" placeholder="Podaj nazwisko"><br>
<input type="text" name="tytul" placeholder="Podaj tytul"><br>
<input type="submit" name="submit">    
</form>

  <?php include "connection.php";

    if(isset($_POST['submit'])) 
    {
        $imieAutora= $_POST['imieAutora'];
        $nazwiskoAutora= $_POST['nazwiskoAutora'];
		$tytul= $_POST['tytul'];
        
    $query= "SELECT * FROM ksiazki WHERE imieAutora='$imieAutora' AND nazwiskoAutora='$nazwiskoAutora' AND tytul='$tytul';";   
        
    $result=mysql_query($query);
	
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
    }

    ?>
	
	