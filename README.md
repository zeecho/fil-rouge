# How to use it

## Things to do after cloning (first time) :

* Edit _app/config/parameters.yml_ and put your informations in it

* Execute those commands :
1.```composer install```
2.```php app/console doctrine:database:create```
3.```php app/console doctrine:schema:update --force```
4.```php app/console server:run```

* Go to http://127.0.0.1:8000

## Things to do after pulling (project already on your computer)

* Execute those commands :
1.```composer install```
2.```php app/console doctrine:schema:update --force```
3.```php app/console server:run```

* Go to http://127.0.0.1:8000
