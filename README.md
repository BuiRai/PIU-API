# PIU-API
### (Alpha version)
A RESTful API for Pump It Up
## Setup
- Download or clone the source code into a working directory.
- Move to the project's folder
```
$ cd project_folder
```
- Install the dependencies using composer
```
$ composer install
```
- Rename the **.env.example** file to **.env**
- Set up the local development enviroment replacing the default data to your enviroment variables.
- Create your database (just like your enviroment variable DB_DATABASE=DATABASE_NAME)
- Run the migrations
```
php artisan migrate
```
- To seed the database with fake data just run the command
```
php artisan db:seed
```
- And finally, run the project
```
$ php artisan serve
```
- Visit localhost:8000 to view the app
