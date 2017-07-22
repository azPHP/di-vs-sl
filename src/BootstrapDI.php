<?php

namespace AZPHP\DiVsSl;

use Auryn\Injector;
use AZPHP\DiVsSl\Classes\ClassC;

class BootstrapDI
{
    /**
     * @var Injector
     */
    protected $container;

    public function __construct()
    {
        $this->container = new Injector();
    }

    public function run()
    {
        $classC = $this->container->make(ClassC::class);
        var_dump($classC);
    }
}
