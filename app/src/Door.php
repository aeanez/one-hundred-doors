<?php
namespace App\Src;

class Door {

    /**
     * List of posible door states
     */
    public array $states = [
        'closed',
        'open'
    ];

    /**
     * Map list of simbols for states
     */
    public array $simbols = [
        "#",
        "@"
    ];

    /**
     * Current door state
     */
    public string $currentState = 'closed';

    public function visit() : Door
    {

        $this->currentState = next($this->states) ? current($this->states) : reset($this->states);

        return $this;

    }

    public function getSimbol()
    {
        return $this->simbols[array_search(current($this->states), $this->states)];
    }

}