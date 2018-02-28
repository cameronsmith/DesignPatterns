# State Pattern

In the State Pattern a class will change it's behaviour based on it's circumstances.
 
In the example provided an ATM machine will use a different state based on it's circumstances e.g:
- No ATM card is inserted.
- An ATM card has been inserted.
- The user has entered a correct PIN.
- The ATM has no money.

The process works like the following:
- Define a **"context"** class to provide an interface to the end user, the `ATM` class in our example.

- Create an interface/abstract class for the states. The `ATMState` interface.

- Create separate states based off the interface/abstract class e.g: `ATMState`.
```
class CorrectPin implements ATMState
class HasCard implements ATMState
class NoCard implements ATMState
class OutOfMoney implements ATMState
```

- Have a pointer within the **"context"** class that points to the current state.

- To change the state of the **"context"** update the pointer. 

**Note:** To change the pointer to new state can be done within the separate states or within the context itself. In 
this example it is done within the states themselves.

![State Pattern](Uml/state-pattern.svg?raw=true "State Pattern")