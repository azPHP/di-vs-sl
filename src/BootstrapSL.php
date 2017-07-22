<?php

namespace AZPHP\DiVsSl;

use AZPHP\DiVsSl\Classes\ClassA;
use AZPHP\DiVsSl\Classes\ClassB;
use AZPHP\DiVsSl\Classes\ClassC;
use Pimple\Container;

class BootstrapSL
{
    /**
     * @var Container
     */
    protected $container;

    public function __construct()
    {
        $this->container = new Container();

        // what? we actually have to put things in our container? :/

//        $this->container[ClassC::class] = new ClassC();
// crap that won't work by itself...
// Let the turtles all the way down begin!
        $this->container[ClassA::class] = function() { return new ClassA(); };
        $this->container[ClassB::class] = function($container) {
            return new ClassB($container[ClassA::class]);
        };
        $this->container[ClassC::class] = function($container) {
            return new ClassC($container[ClassB::class]);
        };
    }

    public function run()
    {
        $classC = $this->container[ClassC::class];
        var_dump($classC);
    }
}
