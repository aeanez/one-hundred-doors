<?php
namespace App\Src;

class Visitor {

    /**
     * List of posible door states
     */
    public array $doorsList = [];

    public function __construct(Door &...$doorList)
    {

        $this->doorsList =& $doorList;

    }

}