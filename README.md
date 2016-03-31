# How to use it

## Things to do after cloning (first time) :

* Edit _app/config/parameters.yml_ and put your informations in it

* Execute those commands :
```
composer install
php app/console doctrine:database:create
php app/console doctrine:schema:update --force
# Only if you want to use fixtures !
php app/console doctrine:fixtures:load
php app/console server:run
```

* Go to http://127.0.0.1:8000

## Things to do after pulling (project already on your computer)

* Execute those commands :
```
composer install
php app/console doctrine:schema:update --force
php app/console server:run
```

* Go to http://127.0.0.1:8000


## For presentation

```
npm install
bower install
```
