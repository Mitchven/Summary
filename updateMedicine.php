<link href="form.css" rel="stylesheet">
<form class="form" action="editMedicine.php" method="post">
    <?php 
        $id=$_REQUEST['id'];
        $link = mysqli_connect("localhost", "root", "", "PNTraining");
        $query = "SELECT * from medicine where id='".$id."'"; 
        $result = mysqli_query($link, $query) or die ( mysqli_error());
        $row = mysqli_fetch_assoc($result);
    ?>
    <a href="editMedicine.php"></a>
    <h2>Medicine Form</h2>
    <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
    <label>Generic Name:</label>
    <input class="input" name="generic_name" type="text" value="<?php echo $row['generic_name'];?>">
    <label>Medicine Type:</label>
    <input class="input" name="medicine_type" type="text" value="<?php echo $row['medicine_type'];?>">
    <label>Quantity</label>
    <input class="input" name="quantity" type="text" value="<?php echo $row['quantity'];?>">
    <label>Price</label>
    <input class="input" name="price" type="text" value="<?php echo $row['price'];?>"><br>
    <input class="submit" name="submit" type="submit" value="Update">
</form>