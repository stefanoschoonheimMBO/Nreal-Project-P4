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
VALUES ('example', 'Dit is een example pagina');