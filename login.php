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
            <h1>Log In</h1>  
            <form action="" method="post">  
                <input type="text" name="email" placeholder="Please Enter Email" required />  
                <br />  
                <input type="password" name="pass" placeholder="Please Enter Password" required />  
                <br />  
                <input type="submit" name="submit" value="Login" />  
            </form>  
            <p>Don't have an account yet?<a href="register.php"> Register</a></p>  
        </div>  
    </body>  
  
    </html>  