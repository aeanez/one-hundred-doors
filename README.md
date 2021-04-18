# One hundred doors Kata

This package solve the 100 doors kata from tddbuddy.com

http://tddbuddy.com/katas/100%20Doors.pdf

### How to use
```
composer requiere aeanez/one-hundred-doors
```

```
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
```