
   

   <?php include "connection.php";

    if(isset($_POST['submit'])) 
    {
        $username= $_POST['username'];
        $password= $_POST['password'];
        echo "Hello " . $username . " ";
        echo "your password is " . $password;
        $query = "INSERT INTO users(username, password)";
        $query.= "VALUES ('$username', '$password')";   
        $result=mysql_query($query);
        if (!$result) {die('Query failed: ' . mysql_error());}
    }
    ?>
    <br>
    <a href=form.php>Return</a>