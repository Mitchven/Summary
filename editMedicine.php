<?php
    session_start();
    $connection = mysqli_connect("localhost","root","","PNTraining");
    if(isset($_POST['submit']))
    {    
        $id = $_POST['id'];
        $generic_name = $_POST['generic_name'];
        $medicine_type = $_POST['medicine_type'];
        $quantity = $_POST['quantity'];   
        $price = $_POST['price'];
          
        if(empty($generic_name) || empty($medicine_type) || empty($quantity) || empty($price)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        } else {    
            $sql=mysqli_query($connection,"UPDATE medicine SET generic_name='$generic_name',medicine_type='$medicine_type',quantity='$quantity',price='$price' WHERE id=$id");
            header("Location:dashboard.php");
        }
    }
?>
