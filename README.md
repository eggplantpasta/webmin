# WebMin 👾

**A minimal PHP/SQLite/Mustache website template.**

This template is intended to be used for quick non-production hobby websites. It has the following design goal:

* runnable from the PHP built in webserver to ease development straight from the repository
* minimal dependencies PHP, Composer, SQLite, MustachePHP

## Structure

The structure of the project folders conforms mostly to the  [Standard PHP Package Skeleton](https://github.com/php-pds/skeleton). Refer to that document to determine how to extend this template in an organised manner.

* **/bin** executable scripts such as `install.sh` and `serve.sh`
* **/config** various .ini files
* **/public** the entry point (web root)
* **/src** classes and other included PHP code
* **/db** DDL and DML used to build and seed the database as well as the SQLite data file itself
* **/templates** Mustache templates

## Getting Started

Install the prerequisites of PHP and SQLite.

```sh
# update the machine
sudo apt-get update && sudo apt-get -y upgrade

# install php and sqllite
sudo apt install php-cli php-sqlite3 sqlite3

# optional GUI SQLite browser
sudo apt install sqlitebrowser
```

Install [Composer](https://getcomposer.org/) your preferred way.

On the github repository page press the "use this template" button to "Create a new repository" (see [Creating a repository from a template](https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-repository-from-a-template#creating-a-repository-from-a-template)).

Clone your new repository locally.

```bash
git clone https://github.com/eggplantpasta/myproject.git
```

Run the scripts that install the defined dependencies via composer, create local config files based on the examples, and start the local PHP server.

```bash
bin/install.sh
bin/serve.sh
```

Go to [the website homepage](http://localhost:8080).

## Examples

Simple example pages have been included to show how bits of the framework can be used.

* [The standard PHP Info page](http://localhost:8080/tests/info.php) *remove before deployment in production*.
* A [simple class](http://localhost:8080/tests/bootstrap-test.php) example.
* [SQLite database connection](http://localhost:8080/tests/db-test.php) example.
* [Template rendering](http://localhost:8080/tests/template-test.php) example.

A more complicated example [user account system](http://localhost:8080/user/account.php) has been included with login, logout, registration, and password reset pages.

## Limitations

This is more of a learning platform than one that could be deployed in production. The user system especially is just an example and a real system would need to have many more features to be considered production ready.

For real development use something like [Laravel](https://laravel.com/).

## References

* [SQLite](https://www.sqlite.org/)
* [PHP](https://www.php.net/) and [PHP The Right Way](https://phptherightway.com/)
* [Pico CSS](https://picocss.com/) Minimal CSS framework for semantic HTML
* [Mustache.php](https://github.com/bobthecow/mustache.php/wiki)
* [Standard PHP Package Skeleton](https://github.com/php-pds/skeleton)
* Stefan Huber's article on the [PHP built-in web server](https://stefanhuber.at/posts/php-builtin-webserver/)
* [PSR-4](https://www.php-fig.org/psr/psr-4/) and [Build your own PSR-4 autoloader](https://pretzelhands.com/posts/build-your-own-psr-4-autoloader/)
