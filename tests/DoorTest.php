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

}


?>