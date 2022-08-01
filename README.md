<img src="https://user-images.githubusercontent.com/15009059/182035546-cd2ea69e-c2f3-4c0a-ad80-2e4e261430cf.png">

## Tests

### Prerequisites
Before running tests you'd need to have `mysql`, `postgresql` installed on your
machine, if you're using macOS that'd be simply running `brew install mysql` or
`brew install postgresql` or if you're willing to step into dark real of Docker you'd just need a `docker-compose.yml`.

After you got MySQL and PostgreSQL setup, you only need to do one thing, now
tests are not using any ENV variables / .env file so to keep it simple you just
need to create a database `laravel` without password for MySQL as simpley as
running the below command:


```
mysql -u root
CREATE DATABASE laravel;
```


### Migrations
I left a simple SQL below to run as migration for `ShirtOrder` model which is
defined as `shirt_orders` table in SQL that you need to run after you got your
databases setup.


MySQL
```sql
CREATE TABLE shirt_orders (
	id integer,
	fabric_id integer,
	customer_id integer,
	waist_size integer,
	wrist_size integer,
	chest_size integer,
	collar_size integer,
	updated_at datetime,
	created_at datetime
)
```

PostgreSQL
```sql
CREATE TABLE shirt_orders (
	id integer,
	fabric_id integer,
	customer_id integer,
	waist_size integer,
	wrist_size integer,
	chest_size integer,
	collar_size integer,
	updated_at timestamp,
	created_at timestamp
)
```

### Dependencies
Here I'm using `composer` to install phpunit for automated tests, so you **must** have `composer` installed on your machine by running `brew install composer` / following the below link instructions.
https://getcomposer.org/doc/00-intro.md

Then simply run:

```
$ composer update
```





### Running tests
```
$ ./vendor/bin/phpunit Tests --testdox\

PHPUnit 9.5.21 #StandWithUkraine

Shirt Order Repository
 ✔ It supports mysql
 ✔ It supports in memory
 ✔ It caches

Time: 00:00.024, Memory: 4.00 MB

OK (3 tests, 3 assertions)
```
