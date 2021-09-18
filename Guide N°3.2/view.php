<?php
    require_once "Config/Autoload.php";
    use Models\Person as Person;
    use Views\viewPerson as View;

    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
	$password = $_POST["password"];
	$birthday = $_POST["birthday"];
	$sex = $_POST["sex"];
	$aboutYou = $_POST["aboutYou"];
	$role = $_POST["role"];
	$interest = array("interest_database"=>$_POST["interest_database"]);

    $person = new Person($fullName,$email,$password,$birthday,$sex,$aboutYou,$role,$interest);
    $view = new View($person);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/baseStyle.css">
    <title><?php echo $person->getFullName()?></title>
</head>
<body>
    <?php echo $view->getView()?>
</body>
</html>