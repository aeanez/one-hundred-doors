<?php

namespace Tests;

use App\Src\Door;
use PHPUnit\Framework\TestCase;

class DoorTest extends TestCase{
    
    /** @test */
    public function it_returns_close_state_for_a_new_door()
    {
        $door = new Door();
        $this->assertEquals('closed', $door->currentState);
    }

    /** @test */
    public function it_returns_open_when_a_door_is_visited_for_the_first_time()
    {
        $door = new Door();
        $door->visit();

        $this->assertEquals('open', $door->currentState);
    }

    /** @test */
    public function it_must_return_close_after_visiting_on_close()
    {
        $door = new Door();
        $door->visit()->visit();

        $this->assertEquals('closed', $door->currentState);
    }

    /** @test */
    public function it_returns_the_current_state_simbol_of_a_closed_door()
    {
        $door = new Door;

        $this->assertEquals('#', $door->getSimbol());

    }

    /** @test */
    public function it_returns_the_current_state_simbol_of_a_open_door()
    {
        $door = new Door;

        $door->visit();

        $this->assertEquals('@', $door->getSimbol());

    }

}


?>