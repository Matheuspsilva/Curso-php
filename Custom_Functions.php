<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    
<?php 
    #Functions
    echo "Functions";
    echo "<br>";
    function soma($num1,$num2){
        return($num1 + $num2);
    }
    
    echo soma(4,8);
    
    #Global Variables and Scope
    /*
        $GLOBALS
        $_SERVER
        $_REQUEST
        $_POST
        $_GET
        $_FILES
        $_ENV
        $_COOKIE
        $_SESSION
    */
            echo "<br>";
    #Scope
    echo "<br>";
    echo "Scope";
    echo "<br>";
    $x = "outside";
    echo $x;
    echo "<br>";
        
    function convert(){
        global $x;
        $x = "inside";
        echo $x;
        echo "<br>";
    }
    
    convert();
    
    echo $x;
    echo"<br>";
    
    #Constants
    echo "<br>";
    echo "Constants";
    echo "<br>";
    define("PI",3.14159265359);
    echo PI;
    
    

?>
    
    
</body>
</html>