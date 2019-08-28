# Shift-Challenge
Php, Laravel, MySQL, Js, Jquery, Bootstrap

A simple web application that emulates a MBTI test.
The user just have to select the agreement level of 10 questions, in a level from 1 to 7. Write their email and submit and the app will determine the dimensions where user belongs.

This simple design is fully based in this: https://www.figma.com/file/00SYaOnpIUYLAdvhGlTz4j97/Engineer-Perspective-Test

# Setup
A MySQL database must be created at localhost (127.0.0.1).
The info for the conection and be found at .env file inside this project.

The connection info is the following: 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shift
DB_USERNAME=admin
DB_PASSWORD=shiftChallenge2019
```
After testing the connection, we will open a terminal inside the project folder and run:
```
php artisan migrate
```
That will create the database tables. Then we will populate those tables running:
```
php artisan db:seed
```
Thats it! You should be able now to run the project.

Enjoy!

# Facts
By fully attaching to the design, the app has no return buttons from results page.

In the Test Cases file, there is one wrong test case. The test case D says that the result must be INFP but it's actually INFJ.




