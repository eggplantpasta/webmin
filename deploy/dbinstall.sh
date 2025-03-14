#!/bin/bash

sqlite3 ../resources/db.sqlite3 < ../src/db/create.sql
sqlite3 ../resources/db.sqlite3 < ../src/db/seed.sql