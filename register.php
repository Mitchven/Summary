<?php  
    include 'class.php';  
    $user = new User();  
    if ($_SERVER["REQUEST_METHOD"] == "POST"){  
        $register = $user->register($_REQUEST['fname'],$_REQUEST['username'],$_REQUEST['email'],$_REQUEST['pass']);  
        echo $register;
        if($register){  
            echo "Registration Successful!";  
        }
        else
        {  
            echo "Entered email already exist!";  
        }  
    }  
?>  
    <html>  
  
    <head>  
        <title>Registration</title>  
        <link rel="stylesheet" href="style.css" />  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>Registration</h1>  
            <form action="" method="post">  
                <input type="text" name="fname" placeholder="Please Enter fullname" required />  
                <br />  
                <input type="text" name="username" placeholder="Please Enter Username" required />  
                <br />  
                <input type="text" name="email" placeholder="Please Enter Email" required />  
                <br />  
                <input type="password" name="pass" placeholder="Please Enter Password" required />  
                <br />  
                <input type="submit" name="submit" value="Register" />  
            </form>  
            <p>Already have an account?<a href="login.php"> Login</a></p>  
        </div>  
    </body>  
  
    </html>  