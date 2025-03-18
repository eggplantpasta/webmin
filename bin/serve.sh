#!/bin/bash

# Start the server
PHP_HOME=$(git rev-parse --show-toplevel) bash -c 'php -S localhost:8080 -c ${PHP_HOME}/config/php.ini -t ${PHP_HOME}/public'