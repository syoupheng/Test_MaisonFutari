# Test_MaisonFutari

## 1) Introduction

This project is an application similar to the website "TripAdvisor" but it is focused on stores, restaurants...etc related to japanese culture. Here you can find different places and if you create an account you will be able to add new establishements and post comments and ratings. Only users with admin privileges (see 'role' column in the 'users' table of the database) can delete establishements and comments.

## 2) Creating the database

In order to launch this project on your machine you will need to go to the **laravel** directory inside the project and import the database I created with MySQL by uisng the dump called **JapAdvisor.sql**. You can also create an empty database and use the migrations but in that case your tables will not be populated so I recommend importing the dump.

## 3) Installing the dependencies

Then once your database is ready you will need to install the dependencies this project requires. To do that, you have to install the PHP package manager **Composer** and run this command :

`composer install`

## 4) Connecting to the database

In order to connect to the databse you created you will need to enter the infos of your database in a **.env** file that you can create by copying the **.env.example** file :

`cp .env.example .env`

## 5) Generating an encryption key

Laravel requires you to have an app encryption key which is generally randomly generated and stored in your **.env** file. To generate a new key you can run this command (make sure that you are in the laravel directory) :

`php artisan key:generate`

If you check the **.env** file again, you will see that it now has a long random string of characters in the **APP_KEY** field. We now have a valid app encryption key.

## 6) Starting the server

To launch the server provided by Laravel run this command :

`php artisan serve`

You can access the application by typing this address in your browser : 

`localhost:<your_port_number>`

Your port number is the last number that was displayed when you used the last command.

## 7) How to use this application

Congratulations ! You have now access to this application ! You can create a normal account but if you want to be able to delete establishements or comments you will need admin privileges. To get admin privileges you can login with **admin@gmail.com** and the password **admin**. Another method is to create a new admin user with the **UserSeeder.php** file. 