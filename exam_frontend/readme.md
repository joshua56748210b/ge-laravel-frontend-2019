## Set-up
--Database
1) Create a database with a dbname of "tech_exam"

--Server
1) Update the neccessary connection properties in config/database.php and .env file

2) Using CMD. Navigate to directory where you made a copy.
  ~ php artisan migrate
  ~ php artisan db:seed

## Start the server
Run the server with the command
~ php artisan serve

And navigate to localhost:8000