<?php
    namespace process;

    require_once "../Config/Autoload.php";

    use Config\Autoload as Autoload;

    use repository\BeerRepository as BeerRepository;
    use models\Beer as Beer;
    use repository\IBeer as IBeer;

    Autoload::start();

    if($_POST){
        $newBeer = new Beer($_POST['beerCode'],$_POST['beerName'],$_POST['description'],$_POST['type']);
        $repository = new BeerRepository();
        $repository->add($newBeer);
        echo "<script> alert('Birra agregada con Exito!');";  
	    echo "window.location = '../list.php'; </script>";
    }

?>