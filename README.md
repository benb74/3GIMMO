# **3G IMMO**
Crud on the theme of real estate with Framework LARAVEL

## External Dependencies

### PHP
This is a php project.
Make sure to have php 8.0 installed locally.

### Laravel
This is a Laravel framework built.
Make sure to have Laravel 8 installed locally.

### mySQL
You must have a mySQL server up and running.
By default, the application will use the following connection string:  
`host=localhost port=3306 user=root dbname=properties_for_sale_db password=Pa$$w0rd`
This can be overridden by setting the `DB_URL` env variable ine `.env` file.

### Deployment
Create a mySQL database named 
`properties_for_sale_db`

Start up mySql server
`start sql server`

Start up the laravel web server
`php artisan serve`

Create tables in the database running migrations
`php artisan migrate`

run the seeders to feed the tables
`php artisan db:seed`

Go on the laravel localhost adress 




