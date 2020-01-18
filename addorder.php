<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php  
  include("addMedicinedb.php");
?>

<h2>Medicine Form</h2>

<form action="addMedicinedb.php" method="post">
  <div class="container">
    <label for="gname"><b>Generic Name</b></label>
    <input type="text" placeholder="Enter Generic Name" name="gname" required>
    <label for="mtype"><b>Medicine Type</b></label>
    <input type="text" placeholder="Enter Medicine type" name="mtype" required>
    <label for="qty"><b>Quantity</b></label>
    <input type="text" placeholder="Enter Quantity" name="mqty" required>
    <label for="price"><b>Price</b></label>
    <input type="text" placeholder="Enter Price" name="price" required>
        
    <button class="submit" name = "submit" type="submit">Add Order</button>
    
</form>
  
</body>
</html>