<?php

    $date = $_GET["date"];
    $factA = $_GET["factA"];
    $factB = $_GET["factB"];
    $number = $_GET["number"];
    $actualDate = strtotime(date("d-m-Y",time()));
    $entryDate = strtotime($date);
    if($entryDate <= $actualDate){
        if($factA || $factB){
            if($number){
                header("location:bill-content.php");

            }else{
                echo '<script language="javascript">alert("Debe ingresar un numero");</script>';
                header("location:add-bill.php");
            }

        }else{
            echo '<script language="javascript">alert("Debe elegir un tipo de factura");</script>';
            header("location:add-bill.php");
        }

    }else{
        echo '<script language="javascript">alert("La fecha debe ser menor o igual a la actual");</script>';
        header("location:add-bill.php");
    }

?>