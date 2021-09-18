<?php
    require_once "Config/Autoload.php";

    use Models\Airplane as Airplane;
    use Models\BattleShip as BattleShip;
    use Models\Cruiser as Cruiser;

    $cruiser1 = new Cruiser();
    $cruiser2 = new Cruiser();
    $cruiser3 = new Cruiser();

    $battleShip1 = new BattleShip();
    $battleShip2 = new BattleShip();
    $battleShip3 = new BattleShip();

    $airplane1 = new Airplane();
    $airplane2 = new Airplane();
    $airplane3 = new Airplane();

    $cruiser1->setCapacity(500);
    $cruiser2->setCapacity(600);
    $cruiser3->setCapacity(900);

    $battleShip1->setArmament("Rocket Launchers");
    $battleShip2->setArmament("Machineguns");
    $battleShip3->setArmament("Atomic Bombs");

    $airplane1->setCapacity(10);
    $airplane2->setCapacity(13);
    $airplane3->setCapacity(15);


    $machines = array($battleShip1,$airplane3,$cruiser1,$airplane2,$battleShip3,$cruiser3,$battleShip2,$airplane1,$cruiser2);

    foreach($machines as $machine){
        echo $machine->toString().'<br>';
    }
?>