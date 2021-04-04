create database secdemo;

use secdemo;

CREATE TABLE comments (
    ID INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(255) NOT NULL,
    Comment text NOT NULL,
    PRIMARY KEY (ID)
); 
