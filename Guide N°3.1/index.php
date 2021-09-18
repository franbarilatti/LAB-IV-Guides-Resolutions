<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Trabjo Practico 3.1</title>
</head>
<body>
    <?php
        function showArray($array){
            for($index = 0;$index < count($array);$index++){
                echo "posision $index del array = $array[$index] <br>";
            }
        }
        function showAssociativeArray($associativeArray){
            foreach($associativeArray as $x => $x_value){
                echo "nombre: $x_value, edad= $x <br>";
            }
        }
        function ucFirstToArray($array){
            for($index = 0;$index < count($array);$index++){
                echo 'posision'. $index. 'del array = '.ucfirst($array[$index]).'<br>';
            }
        }
        function existInArray($array,$value){
            if(in_array($value,$array)){
                echo "El elemento esta en el array.";
            }else{
                echo "El elemento NO esta en el array";
            }
        }
        function existKeyinArray($array,$key){
            if(array_key_exists($key,$array)){
                echo "La key exite en el array! y su value es: $array[$key]";
            }else{
                echo "La key no esta en el array";
            }
        }

        function extractKeys($arrayAssociative){
            $keys = array_keys($arrayAssociative);
            return $keys;
        }
    ?>
    <h1 class="main-title">Trabajo Practico 3.1</h1>
    <h3>Ejercicio 1</h3>
    <p>Se tiene el siquiente string:</p>
    <p class="array">$name = 'juan,maria,pepe,andrea,jorgelina,cecilia';</p>
    <p>A.	Crear un arreglo de nombres y mostrarlo por pantalla.</p>
    <div>
        <h4>Printeo del String:</h4>
        <?php 
            $name = "juan,maria,pepe,andrea,jorgelina,cecilia";
            echo $name;
        ?>
    </div>

    <div>
        <h4>Printeo del array:</h4>
        <?php 
            $array = explode(",",$name);
            showArray($array);
        ?>
    </div>  
    
    <div>
        <p>B.	 Ordenar alfabéticamente el arreglo de nombres de forma ascendente y mostrar por pantalla.</p>
        <h4>Arreglo ordenado alfabeticamente</h4>
        <?php
            sort($array);
            showArray($array);
        ?>
    </div>
    
    <div>
        <p>C.	Convertir en mayúscula el primer caracter de cada nombre y pasarlo a un nuevo arreglo llamado $newArray. Mostrar por pantalla.</p>
        <h4>Arreglo con mayusculas</h4>
        <?php
            ucFirstToArray($array);
        ?>
    </div>
    <div>
        <p>D.	Obtener la cantidad de valores de $newArray. Crear un nuevo arreglo con 
            enteros llamado $keys. Obtener la cantidad del mismo. Chekeando ambas
            cantidades colocadas en dos variables, utilizar la función array_combine() 
            para generar un nuevo arreglo llamado $arrayAssociative.Las cantidades deben ser 
            iguales.
        </p>
        <br>
        <p>E.	Mostrar por pantalla $ arrayAssociative.</p>
        <h4>Combinacion y muestra de arreglo nuevo</h4>
        <?php
            $newArray = array("pepe","toto","lolo","coco");
            $keys = array(43,54,21,33);
            $arrayAssociative = array();
            $x = count($newArray);
            $y = count($keys);
            if($x == $y){
                $arrayAssociative = array_combine($keys,$newArray);
                showAssociativeArray($arrayAssociative);
            }else{
                echo "La cantidad de elementos del array no coinciden";
            }

        ?>
    </div>
    <h3>Ejercicio 2</h3>
    <div>
        <p>Hacer una función que reciba como parámetros un valor y un array 
            y mostrar por pantalla un mensaje que informe si ese valor existe
             o no en el array.Verificar resultado llamando a dicha función.
        </p>
        <br>
        <h4>Muestra de la funcion</h4>
        <?php
            existInArray($newArray,"pepo");
        ?>
    </div>
    <h3>Ejercicio 4</h3>
    <div>
        <p>Hacer una función que reciba una key y un array y luego de verificar
            si esa key existe en dicho arreglo, muestre el valor asociado a la 
            misma.
        </p>
        <br>
        <h4>Muestra de la funcion</h4>
        <?php
            existKeyinArray($arrayAssociative,54);
        ?>
    </div>
    
    <h3>Ejercicio 5</h3>
    <div>
        <p>Armar una función que dado el $array arrayAssociative., retorne 
            todas sus claves en un string separado por comas. Mostrar string
            por pantalla al llamar a la función.
        </p>
        <br>
        <h4>Muestra de la funcion</h4>
        <?php
            $keys = extractKeys($arrayAssociative);
            echo $keys;
        ?>
    </div>
</body>
</html>