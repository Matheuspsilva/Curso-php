<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>

        <?php 

        #if statement
        echo"if statement";
        echo"<br>";

        if(3>10){
            echo"3 > 10";
            echo"<br>";
        }elseif(3 == 10){
            echo"3 = 10";
            echo"<br>";
        }else{
            echo"3<10";
            echo"<br>";
        }

        #Arithmetic Operators
        echo"<br>";
        echo"Arithmetic Operators";
        echo"<br>";
        $num1 = 1;
        $num2 = 2;

        echo $num1+$num2;
        echo"<br>";
        echo $num1-$num2;
        echo"<br>";
        echo $num1*$num2;
        echo"<br>";
        echo $num1/$num2;
        echo"<br>";
        echo $num1%$num2;
        echo"<br>";
        echo $num2**$num1;
        echo"<br>";

        #Logical Operators
        echo"<br>";
        echo"Comparison Operators";
        echo"<br>";

        if($num1 == 1 && $num2 == 2){
            echo" AND true";
            echo"<br>";
        }

        if($num1 == 1 && $num2 == 2){
            echo" OR true";
            echo"<br>";
        }

        if(!true == false ){
            echo"NOT true";
            echo"<br>";
        }

        #Comparison Operators
        echo"<br>";
        echo"Comparison Operators";
        echo"<br>";

        if($num1 == 1 ){
            echo"equals true";
            echo"<br>";
        }else{
            echo"equals false";
            echo"<br>";
        }

        if($num1 === "1"){
            echo"identical true";
            echo"<br>";
        }else{
            echo"identical false";
            echo"<br>";
        }

        if($num1 !== "1"){
            echo"not identical true";
            echo"<br>";
        }else{
            echo"not identical false";
            echo"<br>";

        }

        #Switch Statements
        echo"<br>";
        echo"Switch Statements";
        echo"<br>";


        $profissao = "engenheiro";
        
            switch($profissao){
                case "professor":
                    echo"Você é um professor";
                    break;
                case "engenheiro":
                    echo"Você é um engenheiro";
                    break;
                case "médico":
                    echo"Você é um médico";
                    break;
                case "advogado":
                    echo"Você é um advogado";
                    break;


            }
        echo"<br>";
        
        #While Loops
        echo"<br>";
        echo"While Loops";
        echo"<br>";
        
        $num1 = 1;
        while($num1 < 5 ){
            echo"num1 < 5";
            $num1++;
            echo"<br>";
        }
        echo"<br>";
        
        $num1 = 1;
        echo"Do while";
        echo"<br>";
        
        do{
            echo"num1 < 1";
            $num1++;
            echo"<br>";
            
        }while( $num1 < 1);
        
        
        
        echo"<br>";
        #For Loops
        echo"<br>";
        echo"For Loops";
        echo"<br>";
        
            
        for($num1 = 1; $num1<=10;$num1++){
            echo" The number is: $num1 <br>";
        }
        
        echo"<br>";
        #Foreach
        echo"<br>";
        echo"Foreach";
        echo"<br>";
        
        $cars = ["Volvo","BMW","Toyota","GM"];
        
        foreach($cars as $element){
            echo"$element <br>";
        }
            
        









        ?>

    </body>
</html>