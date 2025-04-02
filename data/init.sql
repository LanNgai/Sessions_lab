CREATE DATABASE login;
use login;
CREATE TABLE users (
                    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(30) NOT NULL,
                    password VARCHAR(45) NOT NULL
);

INSERT INTO users (username, password) VALUES ('Steve', 'pass');
INSERT INTO users (username, password) VALUES ('Dave', '1234');
