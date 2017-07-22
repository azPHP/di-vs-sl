<?php

namespace AZPHP\DiVsSl\Classes;

class ClassB
{
    /**
     * @var ClassA
     */
    private $a;

    public function __construct(ClassA $a)
    {
        $this->a = $a;
    }
}
