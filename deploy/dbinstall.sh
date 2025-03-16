#!/bin/bash

# Figure out environment variables
export REPO_ROOT=`git rev-parse --show-toplevel`

sqlite3 ${REPO_ROOT}/resources/db.sqlite3 < ${REPO_ROOT}/src/db/create.sql
sqlite3 ${REPO_ROOT}/resources/db.sqlite3 < ${REPO_ROOT}/src/db/seed.sql