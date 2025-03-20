# WebMin 👾

**A minimal PHP/SQLite website template.**

This template is intended to be used for quick non-production hobby websites. It has the following design goal:

* runnable from the PHP built in webserver to ease development straight from the repository
* minimal dependencies PHP,  SQLite, 

## Structure

The structure of the project folders conforms mostly to the  [Standard PHP Package Skeleton](https://github.com/php-pds/skeleton). Refer to that document to determine how to extend this template in an organised manner.

* /src source code not intended to be deployed. 
* /src/db DDL and DML used to build and seed the database

## Installation (Ubuntu Linux)

Install the prerequisites of PHP and SQLite.

```sh
sudo apt update
sudo apt install php-sqlite sqlite3

# optional GUI SQLite browser
sudo apt-get install sqlitebrowser
```

On the github repository page press the "use this template" button to "Create a new repository" (see [Creating a repository from a template](https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-repository-from-a-template#creating-a-repository-from-a-template)).

Start the local PHP server.

```bash
php -S localhost:8080 -t public/ -c config/php.ini
```

Go to [the website homepage](http://localhost:8000).

## Development

## Deployment

## References

* [PHP The Right Way](https://phptherightway.com/)
* [Standard PHP Package Skeleton](https://github.com/php-pds/skeleton)
* [SQLite](https://www.sqlite.org/)
* Stefan Huber's article on the [PHP built-in web server](https://stefanhuber.at/posts/php-builtin-webserver/)
* [PSR-4](https://www.php-fig.org/psr/psr-4/)
* [Build your own PSR-4 autoloader](https://pretzelhands.com/posts/build-your-own-psr-4-autoloader/)

**PHP Manual >**

* [Built-in web server](https://www.php.net/manual/en/features.commandline.webserver.php)
* [Magic constants](https://www.php.net/manual/en/language.constants.magic.php)
* [parse_ini_file](https://www.php.net/manual/en/function.parse-ini-file.php)