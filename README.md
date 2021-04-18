# One hundred doors Kata

This package solve the 100 doors kata from tddbuddy.com

http://tddbuddy.com/katas/100%20Doors.pdf

### How to use
```
composer requiere aeanez/one-hundred-doors
```

```
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
```