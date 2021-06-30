# TodoApp
TodoApp using Laravel 8 Sanctum for backend and React for frontend

How to use

1. Download this file
2. Add your database info ( .env)
3. Run command php artisan migrate, to create database.
4. Run php artisan db:seed.
5. run php artisan serve, to run backend on port 8000.

Route
#Public
Post   /api/login

#Protected
Post  /api/register (only user can make new account for another people)
Post   /api/logout

 /api/user, /company, /task (resourse controller), user can do after login success. 
 
 Gate
 
 There is 2 roles in this project Admin and User.
 
 Admin can do anything.
 User can make new user, new task with same company id. Edit tasks's and company's information. 
