# around-trip

## A website created with Symfony 5
### A website for writing articles about travelling around the world and offering many other features coming later on

#### Routing with php 8 attributes
To activate the annotations also called attributes for your routing, it is needed to activate routes.yaml and attributes yaml.  

As the second file is not existing you have to create it. It has to be located in same folder as routes.yaml, therefore config 

From then, you can now write your methods in your controllers by using the syntax #[] above your methods.  
Have a look at attributes.yaml and DefaultController for better understanding.  

You can add a few more parameters to your route such as VERBS like GET, PUT, PATCH, POST, DELETE which are required when proceeding a CRUD.  

You can add a SCHEME which basically means the way you want the route to be accessed, with secure or non secure
Therefore, HTTPS or HTTP.  
If the page were to be accessed with the wrong SCHEME on your local server, you will see a message "this page is not accessible"

