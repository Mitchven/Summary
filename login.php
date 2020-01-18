<?php  
   session_start();  
   include 'class.php';  
   $user = new User();  
   if ($user->session())  
   {  
      header("location:index.php");  
   }  
  
   $user = new User();  
   if ($_SERVER["REQUEST_METHOD"] == "POST"){  
    $login = $user->login($_REQUEST['email'],$_REQUEST['pass']);  
    if($login){  
        header("location:index.php");  
    }
    else
    {  
        echo "Login Failed!";  
    }  
}  
?>  
<html>  

<head>  
    <title>Log In</title>  
    <link rel="stylesheet" href="style.css" />  
</head>  
  
<body>  
    <div class="form">  
        <center><h1>Log In</h1></center> 
        <form action="" method="post">
        <div class="container">
        <label for="email"><b>Email Address</b></label>
        <input type="text" name="email" placeholder="Please enter email" required>
        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>  
            <!-- <input type="text" name="email" placeholder="Please Enter Email" required />  
            <br />  
            <input type="password" name="pass" placeholder="Please Enter Password" required />  
            <br />   -->
            <input type="submit" name="submit" value="Login" />  
        </form>  
        <p>Don't have an account yet?<a href="register.php"> Register</a></p>  
    </div>  
</body>  
</html>  