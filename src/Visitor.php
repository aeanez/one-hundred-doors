<?php
namespace Aeanez;

class Visitor {

    /**
     * List of posible door states
     */
    public array $doorsList = [];

    /**
     * Iteration string
     */
    public string $simbols = '';


    public function __construct(Door &...$doorList)
    {

        $this->doorsList =& $doorList;

    }

    public function visit(int $iterations = null) : string
    {
        if(is_null($iterations)){
            $iterations = count($this->doorsList);
        }
        
        for ($i=1; $i <= $iterations; $i++) { 
            foreach ($this->doorsList as $key => $door) {
                if(($key+1) % $i == 0){
                    $this->doorsList[$key]->visit();
                }
            }
        }

        foreach ($this->doorsList as $key => $door) {
            $this->simbols .= $this->doorsList[$key]->getSimbol();
        }

        return $this->simbols;
    }

}