#!/bin/bash

# Set the PHP_ROOT environment variable
export PHP_ROOT=$(git rev-parse --show-toplevel)

# Start the server
php -S localhost:8080 -c ${PHP_ROOT}/config/php.ini -t ${PHP_ROOT}/public