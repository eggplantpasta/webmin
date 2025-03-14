#!/bin/bash

# Figure out environment variables
export REPO_ROOT=`git rev-parse --show-toplevel`

# Start the server
php -S localhost:8080 -t public/ -c ${REPO_ROOT}/config/php.ini