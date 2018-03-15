# Command

The command pattern has three parts:
- The `receiver` that handles the actions.
- The `commands` that `execute` or `unexecute` each `receiver` actions.
- The `invoker` that attaches the commands and is accessed by the client.

The benefit of the command pattern is that it allows you to separate a class actions into commands. That way you can 
plug in commands to different client objects that require different requirements. As an example, if you have a 
`LightReceiver` class that controls:

- Turn the light on
- Turn the light off
- Increase the lightness
- Decrease the lightness.

You can separate each one of these actions into commands like:

- `TurnLightOnCommand`
- `TurnLightOffCommand`
- `IncreaseLightCommand`
- `DecreaseLightCommand`

**Note:** You state the `receiver` within the command constructor.

and each of these classes has an `execute` and `unexecute` method that will call the action on the `LightReceiver`. 

You can then attached these to different invokers. For example:

If you have a Two Button Control invoker then you only have two buttons to add commands to. In this case it might be 
just:

- Button1 = `TurnLightOnCommand`
- Button2 = `TurnLightOffCommand`

If you have a Four Button Control invoker you can then add:

- Button1 = `TurnLightOnCommand`
- Button2 = `IncreaseLightCommand`
- Button3 = `DecreaseLightCommand`
- Button4 = `TurnLightOffCommand`

The point is that you can add the commands that best match the invoker. 

Another important part of the commmand pattern is you can add commands as a list, and roll them back because you have a 
both `execute` method and an `unexecute` method.

![Command Pattern](Uml/Command.gif "Command")