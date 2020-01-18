<?php  
    include 'class.php';  
    $user = new User();  
    if ($_SERVER["REQUEST_METHOD"] == "POST"){  
        $register = $user->register($_REQUEST['fname'],$_REQUEST['username'],$_REQUEST['email'],$_REQUEST['pass']);  
            echo $register;
        if($register ){  
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
        <div class="formregister">  
            <h1>Registration</h1>  
            <form action="" method="post"> 
                <label for="fname"><b>Fullname</b></label>
                <input type="text" name="fname" placeholder="Please enter fullname" required>
                <label for="username"><b>Username</b></label>
                <input type="text" name="username" placeholder="Please enter username" required>
                <label for="email"><b>Email Address</b></label>
                <input type="text" name="email" placeholder="Please enter email" required>
                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required> 
                <input type="submit" name="submit" value="Register" />
            </form>  
            <p>Already have an account?<a href="login.php"> Login</a></p>  
        </div>  
    </body>  
  
    </html>  