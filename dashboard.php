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
<?php
    
	echo "<link href='style.css' rel='stylesheet'>";
	$link = mysqli_connect("localhost", "root", "", "PNTraining");
	
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	$sql = "SELECT * FROM medicine";
	$result = mysqli_query($link, $sql);
	if($result){
		if(mysqli_num_rows($result) > 0){
			
			echo "<table class='form' style='color:white'>";
				echo "<tr>";
					echo "<th>Generic Name</th>";
					echo "<th>Medicine Type</th>";
					echo "<th>Quantity</th>";
					echo "<th>Price</th>";
					echo "<th colspan='2'>Action</th>";
				echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['generic_name'] . "</td>";
					echo "<td>" . $row['medicine_type'] . "</td>";
					echo "<td>" . $row['quantity'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
                    $id = $row['id'];
                    
					echo "<td><a href='deleteMedicine.php?id=$id'>Delete Order</a></td>";
					echo "<td><a href='updateMedicine.php?id=$id'>Edit Order</a></td>";
                echo "</tr>";
                
			}
            echo "</table>";
            echo "<center><td><a href='addMedicine.php?id=$id'>Add Order</a></td></center>";
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	// Close connection
	mysqli_close($link);
?>