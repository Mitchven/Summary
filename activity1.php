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
        echo "<hr>Activity no.1 <br> 1.) ";
        function factorial($number){
            if($number <= 1) return 1;
                return $number * factorial($number-1); 
        }
        echo factorial(5);
    ?>

<html>
<body>
    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
        echo "<br>2.) ";
        function chessboard()
        {  
            for($row = 1; $row <= 8; $row++)
            {   
                echo "<tr>";
                for($column = 1; $column <= 8; $column++)
                {
                    $add = $row + $column;
                    if( $add % 2 == 0)
                    {
                        echo "<td height=20px width=120px bgcolor = #fffff></td>";
                    }
                    else
                    {
                        echo "<td height=20px width=120px bgcolor = #00000></td>";
                    }
                }
                echo "</tr>";

            }
        }
        chessboard();
    ?>
    </table>
    <?php
        echo "<br>3.) ";
        function removeElements($month,$value){
            return array_diff($month, is_array($value) ? $value : array($value));
        }
            $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
            $result = removeElements($months,"January");

            print_r($result);   
    ?>
    
    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
        echo "<br>4.)";
        function displayString($name,$salary){
            
                
                for($column = 1;$column <= 2;$column++)
                {
                    
                    if($column == 1)
                    {
                      
                        echo "<td height=20px width=20px bgcolor = #fffff>$name</td>";
                    }
                    else
                    {
                        echo "<td height=20px width=20px bgcolor = #fffff>$salary</td>";
                    }
                }
                echo "</tr>";
            
        }
        displayString("NAME","SALARY");
        displayString("Mars",25000);
        displayString("Mitch",20000);
    ?>
    </table>

    <?php
        echo "<br>5.) ";
        function arithmeticOperation(){
            $d = "A00";
            for($i = 0; $i <= 5;$i++ )
            {
                echo $d++ . "<br>";
            }
        }
        arithmeticOperation();

        echo "<br>6.) ";
        function lastModifiedInfo()
        {
            $filename = "Activity1.php";
            $file = filemtime($filename);

            echo "Filename: " . $filename;
            echo "<br>Last modified date: Last modified ". date("l, dS F, Y, H:sa.",$file);
        }
        lastModifiedInfo();

        echo "<br>7.) ";
        function highlight($str)
        {
            $str = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$str);
            echo $str;
        }
        highlight("PN Training"); 
    ?>
</body>
</html>
