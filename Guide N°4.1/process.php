<?php
    require_once ("Config/Autoload.php");

    use Models\English as English;
    use Models\Spanish as Spanish;
    use Models\Portugues as Portugues;

    if(isset($_POST["language"]) && isset($_POST["greetOpt"])){
        $language = $_POST["language"];
        $greetOpt = $_POST["greetOpt"];
        $greet = null;

        if($language == "spanish"){
            $greet = new Spanish();
        }
        elseif($language == "english"){
            $greet = new English;
        }
        else{
            $greet = new Portugues;
        }


        if($greetOpt == "other"){
            $message = isset($_POST["message"]) ? $_POST["message"] : "No pusiste ningun mensaje";

            call_user_func(array($greet,$greetOpt),$message);
        }
        else{
            call_user_func(array($greet,$greetOpt));
        }
    }else{
        session_start();
        $_SESSION["error"] = "Te falaron datos";
        header("location:index.php");
    }

?>