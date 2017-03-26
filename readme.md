# Installation

### Composer

> Install dependencies
`composer install`

### Mysql

#### Setup environment

> configure host/port/credentials `root/.env`
----
> Install tables (no more script sql required)
`php artisan migrate:refresh`