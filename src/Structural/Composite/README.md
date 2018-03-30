# Composite

The composite pattern lets clients treat individual objects and compositions of objects the same.

The difference between composite pattern and decorator pattern is that the decorator is designed to let you add 
responsibilities to objects without using inheritance; while the composite pattern is to focus on the representation of 
data.
 
In the composite pattern an individual object or collection, "composite", of that object will have similar behaviours.

In our example the common method between our `Collection` class and `Data` class is the `get()` method.

![Composite Pattern](Uml/Composite.svg "Composite")