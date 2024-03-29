This document provides instructions for performing To-do CRUD (Create, Read, Update, Delete) operations using Laravel, a PHP web application framework.

Overview:
This Laravel application allows users to manage data using CRUD operations. These operations enable users to create, read, update, and delete records in the system. I used MVC(Model-View-Controller) architecture to build this TO-do CRUD web application.

Prerequisites:
Before using the application, ensure that you have the following prerequisites installed:

PHP 
Composer 
Laravel 
MySQL/ XAMPP

Installation:
To install the application, follow these steps and use git bash:
  1. Clone the repository:
  git clone https://github.com/your-username/your-repository.git
  2. Navigate to the project directory:
  cd your-repository
  3. Install dependencies:
  composer install
  4. Copy the .env.example file to .env and configure your database settings:
  cp .env.example .env
  5. Generate application key:
  php artisan key: generate
  6. Run migrations to create database tables:
  php artisan migrate
  7. Serve the application:
  php artisan serve

Usage
1. Create:
   To create a new record, send a POST request to the appropriate endpoint with the data to be created.

   Route::get('/product/create',[ProductController::class,'create'])->name ('todo.create');

   <form action="{{route('todo.store')}}" method="post">
     @csrf
     @method('post')

2. Read:
This operation retrieves existing data records from the system. To retrieve records, send a GET request to the appropriate endpoint.

Route::get('/product',[ProductController::class,'index'])->name ('todo.index');

3. Update:
This operation modifies or updates existing data records in the system. To update a record, send a PUT request to the appropriate endpoint with the updated data.

Route::put('/product/{product}/update',[ProductController::class,'update'])->name ('todo.update');

4. Delete:
This operation removes or deletes data records from the system. To delete a record, send a DELETE request to the appropriate endpoint.

Route::delete('/product/{product}/delete',[ProductController::class,'delete'])->name ('todo.delete');

Summary of CRUD operation:

When a user sends a request that request first receives route. Then the route sends that request to the controller. The controller connects to the database. So, the controller fetches the data and shows it to the user.

