# Explanations
**Adapter** is a structural design pattern that allows objects with incompatible interfaces to collaborate.

This pattern allows you to use other libraries in your app by creating a wrapper around the existing library. 
For example, you want to implement filesystem in your application and there are a plenty of providers like local, ftp and S3. Inorder to use the filesystem all of them should implement the same functionality. To solve the problem you can force all of them to use the same methodology through Adapter pattern.

Check the example inside the folder to get an idea how it can be developed.

I will make the some rubbish classes for the providers inorder to understand the process more easily.