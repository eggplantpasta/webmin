#!/bin/bash

# Set the PHP_ROOT environment variable
export PHP_ROOT=$(git rev-parse --show-toplevel)

# create a starter config file from the example file
sed "s@{{PHP_ROOT}}@${PHP_ROOT}@" ${PHP_ROOT}/config/config-example.ini > ${PHP_ROOT}/config/config.ini

# Create the sample database
DB_HOME=${PHP_ROOT}/db/
cd $DB_HOME

sqlite3 db.sqlite3 < create.sql
sqlite3 db.sqlite3 < seed.sql