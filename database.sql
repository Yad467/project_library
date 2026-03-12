CREATE DATABASE library_db;
USE library_db;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(50),
role VARCHAR(20)
);

INSERT INTO users(username,password,role)
VALUES ('admin','admin123','admin');

CREATE TABLE books (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100),
author VARCHAR(100),
quantity INT
);

CREATE TABLE issues (
id INT AUTO_INCREMENT PRIMARY KEY,
book_id INT,
user_id INT,
issue_date DATE,
return_date DATE,
fine INT
);
