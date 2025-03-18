#!/bin/bash

# Create the sample database

DB_HOME=$(git rev-parse --show-toplevel)/db/
cd $DB_HOME

sqlite3 db.sqlite3 < create.sql
sqlite3 db.sqlite3 < seed.sql