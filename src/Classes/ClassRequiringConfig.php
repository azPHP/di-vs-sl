<?php

namespace AZPHP\DiVsSl\Classes;

class ClassRequiringConfig
{
    private $something;
    private $somethingElse;

    public function __construct(string $something, int $somethingElse)
    {
        $this->something = $something;
        $this->somethingElse = $somethingElse;
    }
}
