<?php
    namespace process;

    require_once "../Config/Autoload.php";

    use Config\Autoload as Autoload;

    use repository\BeerRepository as BeerRepository;
    use repository\IBeer as IBeer;
    use models\Beer as Beer;

    Autoload::start();

    if($_POST){
        $beerCode = $_POST['btnDelete'];

        $repository = new BeerRepository();
        $repository->delete($beerCode);

        echo "<script> alert('Se ha eliminado correctamente la Cerveza seleccionada!');";  
	    echo "window.location = '../list.php'; </script>";
    }


?>