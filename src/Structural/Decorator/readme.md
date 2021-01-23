# Explanations
**Decorator** is a structural design pattern that lets you attach new behaviors to objects by placing these objects inside special wrapper objects that contain the behaviors.

This pattern works like a decoration. You have a base plan and you want to add more extra features to it without touching the base plan. In programming you have a base class and you want to add extra features to the class without updating the base class. With this pattern we will see the Open/Closed principle of SOLID will be applied. 
For example, you have a cost calculator and for any extra feature some cost will be added to the main cost. Imagine there are 10 features and the client is free to choose which one thatbhe want. If you do not follo the pattern it will be a mess.

Check the example to see how the patter will be implemented.