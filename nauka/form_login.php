
    <?php include "connection.php";

    if(isset($_POST['submit'])) 
    {
        $username= $_POST['username'];
        $password= $_POST['password'];
        
        $query= "SELECT * FROM users WHERE username='$username' AND password='$password';";  
        
        echo "Hello " . $username . " ";
        echo "your password is " . $password; 
        
        
        $result=mysql_query($query);
       
        if (!$result) {die('Query failed: ' . mysql_error());}
    }

    ?>
    
    <br>
    <a href=form.php>Return</a>