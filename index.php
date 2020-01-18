<?php  
    session_start();  
    include 'class.php';  
    $user = new User;  
    $id = $_SESSION['id'];  
    if (!$user->session()){  
        header("location:login.php");  
    }  
    if (isset($_REQUEST['q'])){  
        $user->logout();  
        header("location:login.php");  
    }  
?>  
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <head>  
        <title>Dashboard</title>  
        <link rel="stylesheet" href="style.css" />  
    </head>  
  
    <body> 
        <div class="navbar">
            <a class="active" href="dashboard.php"><i class="fa fa-fw fa-home"></i> MMG's Pharmacy</a> 
            <a href="activity1.php"><i class="fa fa-tasks" style="font-size:24px"></i> Activity 1</a> 
            <a href="activity2.php"><i class="fa fa-tasks" style="font-size:24px"></i> Activity 2</a>
            <a href="?q=logout"><i class="fa fa-fw fa-user"></i>LOGOUT</a> 
        </div>
    </body>  
  
    </html> 