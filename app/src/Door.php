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
     * Current door state
     */
    public string $currentState = 'closed';

    

}