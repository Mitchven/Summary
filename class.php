<?php  
require "dbconnection.php";
class User  
{  
    public function register( $fname, $username, $email, $pass) {  
        $Dbobj = new DbConnection(); 
        $conn = $Dbobj->getdbconnect();  
        if($res = $conn->query("SELECT * FROM users WHERE email='$email'")) {
            $result = mysqli_num_rows($res);  
            if ($result == 0) {  
                $sql = "INSERT INTO users (fname,username,email,pass) VALUES ('".$fname."','".$username."','".$email."','".$pass."')";
                $query = mysqli_query($Dbobj->getdbconnect(), $sql);
                return true;  
            } else {  
                return false;  
            }
        }
        
    }  
  
    public function login($email, $pass) { 
        $Dbobj = new DbConnection(); 
        $query = $Dbobj->getdbconnect();
        if($res = $query->query("SELECT * FROM users WHERE email='".$email."'AND pass='".$pass."'")) {
            $result = mysqli_num_rows($res);  
            print_r($result);
            if ($result > 0) {  
                $_SESSION['login'] = true;  
                $_SESSION['id'] = $data['id'];  
                return true;  
                echo "true";
            } else {  
                return false; 
                echo "false"; 
            }  
        }
        
    }  
  
    public function fullname($id) {  
        $Dbobj = new DbConnection(); 
        $conn = $Dbobj->getdbconnect(); 
        $result = $conn->query("SELECT * FROM users WHERE id='$id'");  
        $row = mysqli_fetch_array($result);  
        echo $row['fname'];  
    }  
  
    public function session() {  
        if (isset($_SESSION['login'])) {  
            return $_SESSION['login'];  
        }  
    }  
  
    public function logout() {  
        $_SESSION['login'] = false;  
        session_destroy();  
    }  
}  
  
?>  