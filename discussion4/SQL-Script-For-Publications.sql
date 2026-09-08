-- SQL-Script-For-Publications.sql - SQL script to load data into Publications.classics table

/*

To manage and load data into MySQL you can use either one of these tools:

1) VS Code SQL Tools 
2) mysql command Line Interface

It is recommended to use VS Code SQL Tools. It is GUI based and easier to use.

1) VS Code SQL Tools
Extension to connect to MySQL from VS Code
Connect to MySQL Database from Visual Studio Code and Run SQL Queries using SQLTools Extension
https://www.youtube.com/watch?v=wzdCpJY6Y4c&t=100s


2) mysql command Line Interface
To use the Command Line Interface (CLI) to mysql client, you have two options of invoking mysql

a)
Interactive:
start a command window on Windows (search cmd ENTER)
inside the command window, invoke mysql
cd C:\"Program Files\Ampps\mysql\bin"
mysql -u root -pmysql

inside mysql
enter SQL commands by hand one at a time and execute

to quit the session:
quit

b)
Batch:
cd to folder where this script (SQL-Script-For-Publications.sql) is located  
start a command window on Windows in the folder where the script is located
inside the command window, invoke mysql
"C:\Program Files\Ampps\mysql\bin\mysql" -u root -pmysql < SQL-Script-For-Publications.sql

*/

# inside myql, test you can access
SHOW databases;

DROP DATABASE IF EXISTS publications;

CREATE DATABASE publications;

USE publications;

DROP TABLE IF EXISTS classics;

CREATE TABLE classics (
  author varchar(128) default NULL,
  title varchar(128) default NULL,
  category varchar(16) default NULL,
  year smallint(6) default NULL,
  isbn char(13) NOT NULL default '',
  PRIMARY KEY  (isbn),
  KEY author (author(20)),
  KEY title (title(20)),
  KEY category (category(4)),
  KEY year (year),
  FULLTEXT KEY author_2 (author,title)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

select * from classics;