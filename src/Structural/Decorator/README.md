# Decorator

The decorator pattern allows us to chain objects together and provide more flexibility than in inheritance. In the 
client we recursively wrap it as an example:
  
1. Get the gift
2. put it in a box
3. wrap the box

In the example provided we have an interface called `CarService` which is implemented by the `BasicCarService` and is 
then decorated by other classes like `BrakeServiceDecorator`, `OilServiceDecorator`, and etc.

![Decorator Pattern](Uml/Decorator.svg "Decorator")