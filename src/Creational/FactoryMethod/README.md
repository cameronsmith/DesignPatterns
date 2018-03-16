# Factory Method

The factory method abstracts the creation of objects to a factory class. This is helpful as you can change your 
factories (objects created) without having to change the client code. It also makes it easy to add additional objects to 
to the factory without having to litter your code with conditionals.

In this example we have a shipper example. That the client can request UPS or FedEx e.g.

```
$shipper = ShipperFactory::make(ShipperFactory::UPS);
$shipper = ShipperFactory::make(ShipperFactory::FEDEX);
```

![Factory Method Pattern](Uml/Observer.svg "Factory Method")