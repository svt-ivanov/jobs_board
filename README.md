# Simple Job Posts Board System 
The application utilizes the Laravel 4.2 PHP framework.
The project is a general Laravel code sample. 

## Description:
Brief description of specifications of this assignment is put into TASK file.

Part of the main domain logic is transferred into repository. The reason to be done in that way is to separate the domain logic from controllers part.
Here the repository is not being used in the meaning of the abstraction layer of 
the database models. This type of implementation would be more useful if one decides
to build up 2 endpoints of given functionality, e.g. Web interface and JSON RESTful
API in the same time. So one could have 2 different kind of controller's interfaces (REST API and Web), they are being lean and are not depending on the business logic.

The mailing is done event based. PHPUnit framework is employeed for testing the repository part. 

## Requirements:
+ PHP >= 5.4
+ MCrypt PHP Extension
+ Composer Package Manager
+ MySQL Server

## Usage:
Clone the repo and set the necessary configurations. 
You will need to add the hostname of your machine in the app/start/global.php file.
Then if you use *nix system, set the right permissions on app/storage folder: it
requires full access by the web server.

Setup the necessary database configurations: in this example I use MySQL as database
system. You should create MySQL database and put the right configurations in 
app/config/local/database.php. If you intend to use the PHPUnit tests example, you will need to set the configurations into app/config/testing/database.php as well. For the sake of testing purpose, create a new test database, which unit tests will use. Here I decided to use MySQL as well instead of SQLite because it is only one table anyway.    

For the mailing you need to setup configurations into app/config/local/mail.php, if
you intend to run it on some local machine or directly into app/config/mail.php.   

After you finish with the setup, you may run into CLI from the project directory:
 "php artisan serve" and start testing the boarding system.
