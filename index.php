<?php


require_once './vendor/autoload.php';

use Aeanez\OneHundredDoors\Door;
use Aeanez\OneHundredDoors\Visitor;

# Create your how doors list
$doorsList = [
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            //All the way to 100
        ];

# Create your own visitor
$visitor = new Visitor(...$doorsList);

# Visit your doors any number of times
echo $visitor->visit(100); 