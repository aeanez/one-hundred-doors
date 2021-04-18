<?php


require_once './vendor/autoload.php';

use Aeanez\Door;
use Aeanez\Visitor;

# Create your how doors list
$doorsList = [
            new Door(),
            new Door(),
            new Door(),
        ];

# Create your own visitor
$visitor = new Visitor(...$doorsList);

# Visit your doors any number of times
echo $visitor->visit(100); 