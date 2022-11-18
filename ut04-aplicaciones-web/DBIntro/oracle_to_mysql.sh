#!/bin/bash



# constraints da error
# DROP TABLE IF EXISTS poner IF EXISTS
# NUMBER por INTEGER
# VARCHAR2 por VARCHAR

cat $1 | \
    sed -e's/REM/-- REM/' | \
    sed -e's/constraints//i' | \
    sed -e's/DROP TABLE/DROP TABLE IF EXISTS/i' | \
    sed -e's/NUMBER/INTEGER/i' | \
    sed -e's/VARCHAR2/VARCHAR/i' | \
    sed -e's/ALTER SESSION SET NLS_DATE_FORMAT/-- ALTER SESSION SET NLS_DATE_FORMAT/' | \
    sed -e"s/TO_DATE(\('[0-9][0-9]\/[0-9][0-9]\/[0-9][0-9][0-9][0-9]'\))/\1/g" | \
    sed -e's/\([0-9][0-9]\)\/\([0-9][0-9]\)\/\([0-9][0-9][0-9][0-9]\)/\3-\2-\1/g' \
    > $1.mysql.sql









#
