<?php
Class DbConnection{
    function getdbconnect(){
        $conn = mysqli_connect("localhost","root","","PNTraining") or die("Couldn't connect");
        return $conn;
    }
}
?>