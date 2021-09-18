<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class = "ejercicio1">
            
        <h3>Ejercicio 1</h3>
        <?php
            //Ejercicio 1:
            echo"<br>";
            $myNumber = 123;
            $numberString = "123";

            //Inciso A:
            echo "<h4>a)</h4>";
            echo"<br>";
            $result = $myNumber + $numberString;
            echo $result;
            echo"<br>";
            
            //Inciso B:
            echo "<h4>b)</h4>";
            echo"<br>";
            $result = $numberString + $myNumber;
            echo $result;
            echo"<br>";
            
            //Inciso C:
            echo "<h4>c)</h4>";
            echo"<br>";
            $result = $myNumber.$numberString;

            echo $result;
            echo"<br>";
            echo"<br>"; 
        ?>
    </div>
    <br>
    <div class="ejercicio2">   
        <h3>Ejercicio 2</h3>
        <?php 
            //Ejercicio 2
            echo "<h4>a)</h4>";
            echo"<br>";
            if(1 == "1"){
                echo "It's right";
            }else{
                echo "It's diferent";
            }

            echo "<h4>b)</h4>";
            echo"<br>";
            if(1 === "1"){
                echo "It's right";
            }else{
                echo "It's diferent";
            }
            echo"<br>";

            echo "<h4>c)</h4>";
            echo"<br>";
            if(!null){
                echo "It's right";
            }else{
                echo "It's diferent";
            }
            echo"<br>";

            echo "<h4>d)</h4>";
            echo"<br>";
            if(!false){
                echo "It's right";
            }else{
                echo "It's diferent";
            }
            echo"<br>";

            echo "<h4>e)</h4>";
            echo"<br>";
            if(""){
                echo "It's right";
            }else{
                echo "It's diferent";
            }
            echo"<br>";

            echo "<h4>f)</h4>";
            echo"<br>";
            if(" "){
                echo "It's right";
            }else{
                echo "It's diferent";
            }
            echo"<br>";

            echo "<h4>g)</h4>";
            echo"<br>";
            if("tested"){
                echo "It's right";
            }else{
                echo "It's diferent";
            }
            echo"<br>";
            echo "<h4>h)</h4>";
            echo"<br>";
            if(1-1){
                echo "It's right";
            }else{
                echo "It's diferent";
            }
        ?>
        
    </div>
    <br>
    <div class = "ejercicio3">
        <h3>Ejercicio 3</h3>
        <?php 
            //EJERCICIO 3
            $num1 = 10;
            $num2 = 5;
            echo "";
            echo"<br>";
            function multiply($x,$y){
                $result = $x * $y;
                return $result;
            }

            function divide($x,$y){
                $result = $x / $y;
                return $result;
            }

            $result = multiply($num1,$num2);
            echo $result;
            echo"<br>";
            $result = divide($num1,$num2);
            echo $result;
        ?>
    </div>
    <br>
    <div class = ejercicio4>
        <h3>Ejercicio 4</h3>
        <?php 
            //EJERCICIO 4
            echo"<br>";
            $array = array("first value" => 1,"second value"=>"1","tirth value"=>1.2,"fourth value"=>true,"fifth value"=>1+0.2,"sixth value"=>false !==null);
            $arrLenght = count($array);
            echo "la cantidad de elementos del array es: "."<br>".$arrLenght;
            echo"<br>";
            echo"<br>";
            echo"Elements to the array: "."<br>"."<br>";
            foreach($array as $x=>$x_value){
                echo "Key= ".$x." Value= ".$x_value;
                echo"<br>";    
            }
        ?>
    </div>
    <br>
    <div class = "ejercicio5">
         
        <h3>Ejercicio 5</h3>
        <?php 
            //EJERCICIO 5
            $people = array(
                array('name' => 'Martin', 'age' => 18, 'sex' => 'm'), 
                array('name' => 'Martina', 'age' => 25, 'sex' => 'f'), 
                array('name' => 'Pablo', 'age' => 27, 'sex' => 'm'), 
                array('name' => 'Paula', 'age' => 12, 'sex' => 'f'), 
                array('name' => 'Alexis', 'age' => 8, 'sex' => 'm'), 
                array('name' => 'Jacinta', 'age' => 33, 'sex' => 'f'), 
                array('name' => 'Epifania', 'age' => 45, 'sex' => 'f'), 
                );
        ?>
        <h4>A)</h4>
        <?php
            foreach($people as $person){
                if($person['age'] >= 18){
                    foreach($person as $key => $value){
                        if($key == "name"){
                              echo " $key: $value ";
                        }elseif($key == "age"){
                              echo"/ $key: $value ";
                        }else{
                            echo"/ $key: $value <br>";
                        }
                            
                    }
                }
            }
        ?>
        <h4>B)</h4>
        <?php 
            foreach($people as $person){
                if($person['age'] < 18 and $person['sex'] == 'f'){
                    foreach($person as $key => $value){
                        if($key == "name"){
                            echo " $key: $value ";
                        }elseif($key == "age"){
                            echo"/ $key: $value ";
                        }else{
                          echo"/ $key: $value <br>";
                        }
                    }
                }
            }

        ?>
        <h4>C)</h4>
        <table>
            <?php 
                foreach($people as $person):
            ?>
            <tr>
                <?php
                    foreach($person as $key =>$value):
                ?>
                    <td><?php echo $value; ?></td>
                <?php endforeach ?>
            </tr>
            <?php endforeach ?>
        </table>
    </div> 
    <br>
    <div class = "ejercicio6">
        <h3>Ejercicio 6</h3>
        <?php
        //EJERCICIO 6 
        echo"<br>";
        echo "<h4>a)</h4>";
        echo"<br>";
        if(date("l") == "Saturday" || date("l")=="Sunday"){
            echo"Today is ".date("l")."<br>"."Is Weekend";
        }else{
            echo"Today is ".date("l");
        }
        ?>
    </div>     
    
    </body>
</html>


