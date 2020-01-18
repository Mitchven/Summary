<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
	}
	table, th,tr, td {
		border: 2px solid black;
		color:black;
		/* margin-top: 10%; */
		/* margin-left: 20%;
		margin-right: 20%; */
	}
	b ,th{
		color: black;
		font: 150% comic;
	}

	form {
		border: 3px solid black;
		/* margin-right: 10%;
		margin-left: 10%; */
	}

  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>MMG's Pharmacy</h4>
      <ul class="nav nav-pills nav-stacked">
	  <li><a href='addMedicine.php?id=$id'>View Medicine</a></li>
        <!-- <li class="active"><a href="#section1">View Medicine</a></li> -->
        <li><a href='addMedicine.php?id=$id'>Add Order</a></li>
        <li><a href="#section3">Delete Order</a></li>
        <li><a href="#section3">Edit Order</a></li>
      </ul><br>
      <!-- <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div> -->
    </div>
	  <?php
    
	echo "<link href='style.css' rel='stylesheet'>";
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	$link = mysqli_connect("localhost", "root", "", "PNTraining");
	
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	// Attempt select query execution
	$sql = "SELECT * FROM medicine";
	$result = mysqli_query($link, $sql);
	if($result){
		if(mysqli_num_rows($result) > 0){
			echo "<table class='form' style='color:black'>";
				echo "<tr>";
					echo "<th>Generic Name</th>";
					echo "<th>Medicine Type</th>";
					echo "<th>Quantity</th>";
					echo "<th>Price</th>";
					// echo "<th colspan='2'>Action</th>";
				echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['generic_name'] . "</td>";
					echo "<td>" . $row['medicine_type'] . "</td>";
					echo "<td>" . $row['quantity'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
                    $id = $row['id'];
                    
					// echo "<td><a href='DeleteMedicine.php?id=$id'>Delete Order</a></td>";
					// echo "<td><a href='EditMedicine.php?id=$id'>Edit Order</a></td>";
                echo "</tr>";
                
			}
            echo "</table>";
            // echo "<center><td><a href='AddMedicine.php?id=$id'>Add Order</a></td></center>";
			// Free result set
			// mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	// Close connection
	mysqli_close($link);
?>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
