-- ==============================
-- Create database CreateContent
-- ==============================

-- Drop the database if it already exists
drop database if exists CreateContent;

create database if not exists CreateContent;

use CreateContent;

drop table if exists Content;

create table if not exists Content  
(
	id			tinyint		unsigned PRIMARY KEY auto_increment, 
	url			VARCHAR(255),
    pageText	TEXT
);

INSERT INTO Content (url, pageText)
VALUES ('example', '<h1>Dit is een example pagina</h1>');

drop table if exists Users;

create table if not exists Users (
	id			tinyint		unsigned PRIMARY KEY auto_increment,
    email		VARCHAR(255),
    password	VARCHAR(255)
);

-- =============================
-- Create model for contact page to store messages
-- =============================

drop table if exists Messages;

CREATE TABLE IF NOT EXISTS Messages 
(
    id          TINYINT         UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name        VARCHAR(100)    NOT NULL,
    subject     VARCHAR(100)    NOT NULL,
    message     TEXT            NOT NULL,
    email       VARCHAR(100)    NOT NULL
);

-- =============================
-- Create model for contact page to store emails for the newsletter
-- =============================
CREATE TABLE IF NOT EXISTS Emails 
(
    id      TINYINT         UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    email   VARCHAR(100)    NOT NULL
)