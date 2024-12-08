## Clone the project

```
git clone https://github.com/Ahmad-Tayh2/InstaDeep.git
```

## Make sure you have

-   MySql DBMS
-   Have composer
-   Install all dependices using the composer
-   set the db settings in the env file

## these are the endpoints

GET api/tasks
POST api/tasks
GET api/tasks/{task}
PUT|PATCH api/tasks/{task}
DELETE api/tasks/{task}

just where you have {task} pass the id

## do the migration

```
php artisan migrate
```

## run the server

```
php artisan serve
```
