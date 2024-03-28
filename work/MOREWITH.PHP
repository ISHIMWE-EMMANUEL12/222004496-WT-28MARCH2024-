create database mytest;
use mytest;
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_active TINYINT(1) DEFAULT 0
);

CREATE TABLE profile (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    userid INT,
    isCompleted TINYINT(1) DEFAULT 0,
    FOREIGN KEY (userid) REFERENCES user(id)
);

CREATE TABLE message (
    messageid INT AUTO_INCREMENT PRIMARY KEY,
    senderid INT,
    receiverid INT,
    subject VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    creationdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (senderid) REFERENCES user(id),
    FOREIGN KEY (receiverid) REFERENCES user(id)
);