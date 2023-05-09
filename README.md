# Welcome to Task Management

## Setup

####  Installation
**requirements**

 1. PHP: 7.3 | ^8.0
 2. Laravel : ^8.75

First clone this repository, install the dependencies, and setup your .env file.

**run the commands**

clone project
```
git clone hhttps://github.com/Sajid-al-islam/task-management.git
```

or [Click here to download .zip](https://github.com/Sajid-al-islam/task-management/archive/refs/heads/master.zip)


install dependencies
```
composer install
```

swith directory to project
```
cd Task_management
```

generate app key
```
php artisan key:generate
```

copy .env.example and paste as .env
```
cp .env.example .env
or copy .env.example .env
```

open in vs code editor
```
code .
```

open .env file and change db name. 
**database setup**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
```

migrate database
```
php artisan migrate 
```


import the database from the sql file
[task_management.sql](https://github.com/Sajid-al-islam/task-management/blob/master/task_management.sql)

or [Click here to download task_management.sql](https://raw.githubusercontent.com/Sajid-al-islam/task-management/master/task_management.sql)

Finally time to launch project, run
```
php artisan serve
```
the project will open at http://127.0.0.1:8000

or
```
php artisan serve --port=8001 | any supported port number
```


