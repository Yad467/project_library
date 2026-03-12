<?php
include "db.php";
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM users WHERE username='$username' AND password='$password' AND role='admin'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        header("Location: admin_home.php");
    }else{
        echo "Invalid Login";
    }
}
?>
<form method="post">
<h2>Admin Login</h2>
Username:<input type="text" name="username"><br><br>
Password:<input type="password" name="password"><br><br>
<button name="login">Login</button>
</form>
