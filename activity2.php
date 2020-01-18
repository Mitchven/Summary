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
        <!-- <title>Dashboard</title>   -->
        <link rel="stylesheet" href="style.css" />  
    </head>  
  
    <body>  
        <!-- <div class="form">   -->
        <div class="navbar">
            <a class="active" href="dashboard.php"><i class="fa fa-fw fa-home"></i> MMG's Pharmacy</a> 
            <a href="activity1.php"><i class="fa fa-tasks" style="font-size:24px"></i> Activity 1</a> 
            <a href="activity2.php"><i class="fa fa-tasks" style="font-size:24px"></i> Activity 2</a>
            <a href="?q=logout"><i class="fa fa-fw fa-user"></i>LOGOUT</a> 
        </div>
    </body>  
  
    </html> 

<?php
    echo "<hr><br>Activity No. 2 <br>1.) <hr>";

    class Student{
        //constructor
        private $name;
        private $age;
        private $course;

        public function __construct($name, $age, $course){
            $this->name = $name;
            $this->age = $age;
            $this->course = $course;
        }

        public function getName(){
            return $this->name;
        }

        public function getAge(){
            return $this->age;
        }

        public function getCourse(){
            return $this->course;
        }
    }
        $student = new Student("Mars",20,"CCT");
        echo "I'm " . $student->getName() . " " . $student->getAge() . ". My course is " . $student->getCourse() . ".";



        echo "<br>2.) ";
        function storage($name,$email){
            $browser = array ('Firefox','Chrome','Internet Explorer','Safari','Opera');
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;
            $_SESSION["browser"] = $browser[1];
            echo 'Name:  ' . $_SESSION["name"] . ' <br>Email:  ' . $_SESSION["email"] . '<br>Browser: ' .$_SESSION["browser"] = $browser[1];
        }
        storage("Mars","carizon.mars@gmail.com");


        echo "<br>3.) ";
        $marks1 = array(360,310,310,330,313,375,456,111,256);
        $marks2 = array(350,340,356,330,321);
        $marks3 = array(630,340,570,635,434,255,298);

        $maximum = max(max($marks1), max($marks2), max($marks3));
        $minimum = min(min($marks1),min($marks2),min($marks3));

        echo "Maximum: " . $maximum;
        echo "<br>Minimum: " . $minimum;

?>

