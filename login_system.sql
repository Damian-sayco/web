CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
 
INSERT INTO usuarios (username, PASSWORD, email)
VALUES ("damian", "1234", "damigonzalez018@gmail.com");

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    stock INT(11),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);