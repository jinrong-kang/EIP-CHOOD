CREATE DATABASE db_chood;
USE db_chood;

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL  AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `passwd` varchar(128) NOT NULL,
  `nickname` varchar(128) ,
  `user_info` text,
  PRIMARY KEY (id),
  UNIQUE (name)
);

CREATE TABLE `t_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `user_id` int(11) ,
  `text` text NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (user_id) REFERENCES t_user(id)
);