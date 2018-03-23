# Visitor

The visitor design pattern allows you to add methods to different classes without changing much of those classes.

In some languages you can do method overloading based on the method signature. However, this is not possible in PHP so 
on the `Visitor` class we define different methods based on what `Vistee` you are using. 

In our example we have the `Visitor` class with these three methods:

- ```public function visitFood(Visitee $object)```
- ```public function visitAlcohol(Visitee $object)```
- ```public function visitTobacco(Visitee $object)```

For the classes that implement the `Vistee` contracts we have this method: `public function accept(Visitor $visitor)`, 
and within the `accept` method we pass into the method the `Visitor` class and then call it with the `$this` reference, 
thus visiting the `Visitor`. 

As an example for the `Food` class we do the following:

```
$taxSystem = new Visitor;
$food = new Food;

// pass in the visitor class.
$food->accept($taxSystem);
```

On the `Food` `Accept` method we do the following:

```
public function accept(Visitor $visitor)
{
    // call the visitor class while passing the $this reference so that the class "visits" the visitor.
    return $visitor->visitFood($this);
}
```

![Visitor Pattern](Uml/Visitor.svg "Visitor")