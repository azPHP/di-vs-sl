# Dependency Injection vs Factory Container

Showing differences between Dependency Injection and Service Locator (factory container)

## What's the difference?

### Service Locator
* Only *defined* services (Just knows about what it's told to know about)
* Have to configure everything manually

### Dependency Injection
* Inspects constructor of classes in order to inject new instances of required parameters
* Uses Reflection to do this at the time the item is requested

## Show our three layered classes and class requiring configuration

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
