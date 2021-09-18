<?php
    namespace process;

    if($_POST){
        if($_POST['do'] == 'continue'){
            header("location:../add.php");
        }else{
            session_start();
            session_destroy();
            header("location:../index.php");
        }
    }
?>