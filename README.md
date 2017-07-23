# Dependency Injection vs Factory Container

Showing differences between Dependency Injection and Service Locator (factory container)

* Show our three layered classes and class requiring configuration

## Service Locator
* Show initial Service Locator Container Bootstrap
* Weep at the amount of work just to instantiate a single complex object :(
* Run `run-sl`

## Dependency Injection
* Show DI Container Bootstrap
* *Totes Amazeballs* - its so simple!
* Obviously need to write more code, no?
* Run `run-di`
* Profit

## Oh wait, I need to configure something?
* Coding time!

## What if my constructor requires an interface?
* More coding

## What if I want an instance to be shared and not instantiated every time?
* So much more coding
