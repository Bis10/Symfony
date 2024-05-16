# BookList-App-Ref

Simple Symfony 7 booklist project for reference

![alt text](https://github.com/kalwar/booklist-app-ref/blob/main/BookIndex.png?raw=true)

## Description

This project uses Symfony 7 for creating, editing and deleting books utilzing database concepts of Symfony 7.

## Getting Started

### Dependencies

* This repo requires you have [Symfony-MAMP](https://github.com/kalwar/Symfony-MAMP) installed and working in your local computer

### Installing

* Clone the repo to your computer
* Go to Symfony-MAMP folder and copy "booklist-app-ref" to root folder of Symfony-MAMP
* Rename "booklist-app-ref" to "web" folder
* Hit localhost:8007
* You will see warning message like this: `Warning: require_once(/var/www/web/vendor/autoload_runtime.php): Failed to open stream: No such file or directory in /var/www/web/public/index.php on line 5 .. Fatal error ... etc`
* Run inside web folder `composer install`
* If you see .env file missing, you can copy env.example to .env
* You may also have to do database migration inside docker to see app working


## Reference

Use solely for reference material only

