<?php

namespace AZPHP\DiVsSl\Classes;

class ClassC
{
    /**
     * @var ClassB
     */
    private $b;

    public function __construct(ClassB $b)
    {
        $this->b = $b;
    }
}
