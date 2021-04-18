<?php

namespace Tests;

use App\Src\Door;
use App\Src\Visitor;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase{

    /** @test */
    public function it_must_return_an_object_with_a_list_of_doors_injected()
    {
        $doorsList = [
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door()
        ];

        $visitor = new Visitor(...$doorsList);

        $this->assertContainsOnly(Door::class, $visitor->doorsList);

    }

}

?>