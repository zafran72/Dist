# Dist
---

### How to use

Clone this Repository
```console
foo@bar:~$ git clone https://github.com/zafran72/Dist.git
```
Navigate to the directory
```console
foo@bar:~$ cd Dist
```
Run Composer install
```console
foo@bar:~/Dist$ composer install
```
Set package laravel/ui
```console
foo@bar:~/Dist$ composer require laravel/ui --dev
```
Create new .env file with example .env.example
```console
foo@bar:~/Dist$ copy .env.example .env
```
Generate new key for Laravel Application
```console
foo@bar:~/Dist$ php artisan key:generate
```
Run migration
```console
foo@bar:~/Dist$ php artisan migrate
```

Run the laravel app
```console
foo@bar:~/Dist$ php artisan serve
```
