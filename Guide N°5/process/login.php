<?php
    namespace process;

    require_once "../models/User.php";

    use model\User as User;

    $user1 = new User("SSoler","cosme1234","Sebastian","Soler","sebastian@utn.com");
    $user2 = new User("AzarJ","alAzar123","Juan","Azar","juan_azar@utn.com");
    $user3 = new User("Mari123","12345Mari","Maria","Perez","mariap@utn.com");
    $user4 = new User("FranTKD","FranTKD96","Franco","Barilatti","franbarilatti@utn.com");

    $users = array($user1,$user2,$user3,$user4);

    $loggedUser = null;

    if($_POST){
        foreach($users as $user){
            if($_POST['userName'] == $user->getUserName()){
                if($_POST['password'] == $user->getPassword()){
                    $loggedUser = $user;
                }
            }
        }
    }

        
    if($loggedUser != null){
        session_start();
        $_SESSION['loggedUser'] = $loggedUser;
        header("location:../welcome.php");
    }else{
        echo "<script> if(confirm('Verifique que los datos ingresados sean correctos'));";
	    echo "window.location = '../index.php';
		</script>";
    }
?>