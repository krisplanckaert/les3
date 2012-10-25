
<?php
ini_set('display_errors', 1);
//Require the needed objects
require_once 'includes/Vehicle.php';
?>

<html>
    <head>
        <title>
            Vehicle
        </title>
    </head>
    <body>
        
        <?php
            //instance object $car;
            $car = new Vehicle();
            $car->setBrand('Porsche');
            $car->setShape('coupe');
            $car->setColor('White');
            $car->setNumDoors('2');
            $car->setPrice('100000');
            
            echo $car->getBrand().'<br />';
            
            $car->showPrice();
            $car->numDoors();
            $car->drive();
        ?>
    </body>
</html>

