
##	TheLastCodeBender PHP MVC Application without libraries or frameworks

This project is a personal project created by Suleiman A. Mamman AKA TheLastCodeBender to learn the advance fundamentals of programming and modern web development from scratch using PHP 7.2 and MySQL. 

The main goals of the project are to learn and implement the full concept of Model View Controller(MVC), Object-Oriented Programming(OOP), routing, security, authentication, modern web development practices, and finally conbine them all together to function as a modern web application.

The MVC contains two folders inside the app folder (Controller, model) and a view folder in the main directory.

The autoload file load all the classes in each of the app folder automatically, while the index.php file send a route request to the Routecontroller to handle. 

The Routecontroller handle the Navigation between the pages just like laravel routes.  

The model folder has two file in it, the DbConnection.php file allows you to set your database connection, while the user.php model class extends DbConnection model class.

You are free to create as many controllers and models as you want, please See license.txt for full license information.

## Installation

- Clone or download this repository to your project Dir
- Exract the files to your project Dir
- On your server (Xamp or Wamp etc)
- Open your browser and navigate to your project Dir. Example- localhost/project Dir

## License

The TheLastCodeBender PHP MVC Framework is open-sourced software licensed under the [GNU license](https://en.wikipedia.org/wiki/GNU_General_Public_License). See license.txt for full license information.