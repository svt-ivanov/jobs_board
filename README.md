# Simple Job Posts Board System 
The application utilizes the Laravel 4.2 framework.

## Description:
This project is a very general Laravel code sample. The mailing is event
based. Part of the main domain logic is transferred into repository.
PHPUnit tests are employeed for testing the repository. 

## Requirements:
    + PHP >= 5.4
    + MCrypt PHP Extension
    + Composer package manager
    + MySQL server

## Usage:
Clone the repo and set the necessary configurations. 
You will need to add the hostname of your machine in the app/start/global.php file.
Then if you use *nix system, set the right permissions on app/storage folder: it
requires write access by the web server.

Setup the necessary database configurations: in this example I use MySQL as database
system. You should create MySQL database and put the right configurations in 
app/config/local/database.php. If you intend to use the PHPUnit tests example, you will
need to set the configurations into app/config/testing/database.php as well. For the
sake of testing purpose, create a new test database, which unit tests will use. Here I
decided to use MySQL as well instead of SQLite because it is only one table anyway.    

For the mailing you need to setup configurations into app/config/local/mail.php, if
you intend to run it on some local machine or directly into app/config/mail.php.   

After you finish with the setup, you may run into CLI from the project directory:
 "php artisan serve" and start testing the boarding system.
