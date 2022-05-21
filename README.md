# Bus Ticket Reservation system
This project was created for the purpose of demonstarting my coding capabilities to the company in job application process

## Table of contents
* [General info](#general-info)
* [Technologies](#technologies)
* [Setup](#setup)

## General info
This project is simple bus ticket reservation system where any user can register and there by select a tour from the available tours and book a reservation for one or more passengers, each passenger seperately.
	
## Technologies
Project is created with:
* PHP 8.0.8
* MySQL 8.0.28-0ubuntu0.21.10.3 for Linux on x86_64 ((Ubuntu))
* Apache 2.4.48 (Ubuntu)
* Laravel Framework 9.13.0
* Star Admin 2
* Bootstrap 4

	
## Setup
To run this project, create an empty folder (reservations) and clone the repository

```
$ cd reservations
$ composer install
* Add the .env file to project root and update the MySQL database credentials on the file with your Database
$ php artisan migrate
* create a virtual host on apache to point to reservations/public folder. You will see the login page as the home page on the site
```
