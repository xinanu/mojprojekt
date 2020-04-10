
<?php include "connection.php";

$query= "SELECT * FROM products";

$result= mysql_query($query);

while($row=mysql_fetch_array($result))
{
    echo'<table border=1>';
    echo'<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['price'].'</td>';
    echo'</tr>';
    echo'</table>';
}
 
 if (!$result) {die('Query failed: ' . mysql_error());}
    

?>
 <br>
    <a href=form.php>Return</a>