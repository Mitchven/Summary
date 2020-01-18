<?php
    class CRUD{  
        function addOrder(){
            $connection = mysqli_connect("localhost","root","","PNTraining");

            if(isset($_POST['submit'])){
                
                header("Location:Dashboard.php");
                // $username = $_POST['uname'];
                // $password = $_POST['psw'];
                $gname = $_POST['gname'];
                $mtype = $_POST['mtype'];
                $qty = $_POST['mqty'];
                $price = $_POST['price'];

                if($gname != '' || $mtype != '' || $qty != '' || $price != ''){ 
                    $sql = "INSERT INTO medicine (generic_name,medicine_type,quantity,price) VALUES ('$gname','$mtype','$qty','$price')";

                    $query = mysqli_query($connection, $sql);
                    echo "<span>Inserted Successfully.</span>";
                }else{
                    echo "<p>Failed insertion!<br/> Fields required.";
                }
            }
            mysqli_close($connection);//Closing connection
        }
    }   
?>          


  
