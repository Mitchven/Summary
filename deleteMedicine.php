<?php
    session_start();

    $connection = mysqli_connect("localhost","root","","PNTraining");

    if(!isset($_SESSION['login'])) {
        header('Location:login.php');
    }
    
    $id = $_GET['id'];
    $delete=mysqli_query($connection,"DELETE FROM medicine WHERE id=$id");

    header("Location:dashboard.php"); 
?>