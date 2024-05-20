CREATE DATABASE `frontend_quizzes`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `frontend_quizzes`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `last_name` varchar(45) NOT NULL default '',
  `first_name` varchar(45) NOT NULL default '',
  `email` VARCHAR(45) NOT NULL default '',
  `username` varchar(12) NOT NULL default '',
  `password` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
);

CREATE TABLE `messages` (
    `id` INT auto_increment PRIMARY KEY,
    `name` VARCHAR(45) NOT NULL default '',
    `email` VARCHAR(45) NOT NULL default '',
    `message` TEXT NOT NULL default '',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;