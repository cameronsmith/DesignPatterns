# Interpreter

The Interpreter Pattern is a tree-like structure like the Composite pattern.

## Terminal
A leaf node in the structure

## Composite
A subtree "composite" in the structure.

The interpreter needs at least one class for every rule in the grammar

The greater the number of classes and variation makes it difficult to use the pattern.

To be used when time and efficiency is not a concern.

When the code to be interpreted is not complex.


Combined with the Composite pattern the Interpreter Pattern has a method `interpret` that is a simple parser fetching 
data from the composite objects.

The interpreter pattern doesn't address parsing. When the language is very complex, other processes (such as a parser) 
might be more appropriate.

## Implementation

- Define the layout of the input
```
(input number)(initial measurement) "to" (desired measurement unit)
```
- Create the parse tree for the input
- Output the result
```
(input number)(initial measurement) "equals" (Converted input)
```
