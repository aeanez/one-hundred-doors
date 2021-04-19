<?php

namespace Tests;

use Aeanez\OneHundredDoors\Door;
use Aeanez\OneHundredDoors\Visitor;
use PhpParser\Node\Stmt\TryCatch;
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

    /** @test */
    public function it_must_return_the_string_of_simbols_after_visiting_the_doors_once()
    {
        $doorsList = [
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
        ];

        $visitor = new Visitor(...$doorsList);

        $this->assertEquals('@@@@@', $visitor->visit(1));
    }

    /** @test */
    public function it_must_return_an_specific_six_caracter_string_after_any_number_of_iterations()
    {
        $doorsList = [
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
        ];

        $visitor = new Visitor(...$doorsList);

        $this->assertEquals('@##@##', substr($visitor->visit(100), 0, 6));
    }

    /** @test */
    public function it_should_throw_an_exception_when_receive_an_invalid_number_of_iterations()
    {

        $doorsList = [
            new Door(),
            new Door(),
            new Door(),
            new Door(),
            new Door(),
        ];

        $visitor = new Visitor(...$doorsList);

        try {
            $visitor->visit(-3);
        } catch (\Exception $e) {
            $this->assertEquals('Invalid number of iterations has been supplied', $e->getMessage());
            return;
        }

        $this->fail('An expected exception was not raise');
        
    }
    

}

?>