<?php

class dbConnect {
    function _construct(){
        $connection = mysqli_connect("localhost","root","","PNTraining");
        if(!$connection)
        {
            die("Cannot connect to the database");
        }
        return $conn;
    }
    public function close(){
        mysql_close();
    }
}


?>