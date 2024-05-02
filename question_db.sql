CREATE DATABASE question_db;

CREATE TABLE question (
 id INT NOT NULL AUTO_INCREMENT,
 question_text VARCHAR(128) NOT NULL,
 answer_text TEXT NULL DEFAULT NULL,
 PRIMARY KEY (id)
); 

CREATE USER 'question_db_user'@'localhost' IDENTIFIED BY 'Password-0';

GRANT ALL PRIVILEGES ON question_db.* TO 'question_db_user'@'localhost';

INSERT INTO question (question_text, answer_text)
VALUES ('This is question1', 'This is answer one'),
       ('This is question2', 'This is answer two'),
       ('This is question3','This is answer three'),
       ('This is question4', 'This is answer four');

