Overview of JSF framework
By: Andy

Dependencies: You'll need a local java web server like Jetty or Glassfish. I used Apache Tomcat


Instructions to setup in an IDE:
Eclipse: http://www.tutorialspoint.com/jsf/jsf_environment_setup.htm
Intellij: https://www.jetbrains.com/help/idea/2016.1/preparing-for-jsf-application-development.html


Directory overview (import to your IDE's specific directories)
\src\ - This is the directory to implement the backend database stuff written in java
\web\ - This is the frontend webapp directory.


Instructions for development:
 - Maybe someone can create a MySQL database on their UW account that we can use
 - Then use the JDBC to integrate it into our webapp
 - I've created an example webpage, so you guys can see how things work
 - The framework uses the @ManagedBean to represent frontend elements, so create a unique name identifier for each class as well as getters for each field.
 - Classes are lazily instantiated, so the server will create a class when the page runs code that asks for it. To instantiate a class when the server runs, use @eager with the @ManagedBean 
 - index.xhtml is the main webpage
 - Frontend elements can be represented by #{uniquename.fieldName} in the html


Frontend observations:
 - Only the xhtml definition headers need to be strict, but the head and body tags can use regular html
 - stylesheets can be implemented in style.css in the CSS directory
 - JavaScript files can be used, but I don't know how what identifiers to use for the elements
