# Prototype

The prototype pattern creates objects by cloning them. This is simple to do within PHP as it already contains syntax 
that allows us to do this using `clone`.

The magic method `__clone` is called on the cloned object after it is cloned to allow you to setup the object. Although, 
this is not part of the Prototype pattern it's useful to require it in an interface to know that the object will be 
cloned.

As an example:

```
$prototypeCat = new Cat;
$cat = clone $prototypeCat;
$prototypeDog = new Dog;
$dog = clone $prototypeDog;
```

![Prototype Pattern](Uml/Prototype.png "Prototype")