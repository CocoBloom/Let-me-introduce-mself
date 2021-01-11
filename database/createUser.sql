CREATE DATABASE IF NOT EXISTS introductionToPrioris;

DROP TABLE IF EXISTS user;
CREATE TABLE user
(id int auto_increment, name varchar(255) not null, email varchar(255) not null unique, password varchar(255) not null, reg_time timestamp default current_timestamp, primary key (id));

INSERT INTO user (name, email, password, reg_time)
VALUES ('Virag', 'virag@gmail.com', 'virag', NULL);
INSERT INTO user (name, email, password, reg_time)
VALUES ('Coco', 'coco@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TDlRNHBIcUtNSEFWSi9Zbg$fhe3GJXh8SVLtlWHobS/VjqzpqRgH1j7drcgBVUkwTg', NULL);
INSERT INTO user (name, email, password, reg_time)
VALUES ('CodeCool', 'codecool@gmail.com', 'codecool', NULL);
INSERT INTO user (name, email, password, reg_time)
VALUES ('PHP', 'php@gmail.com', 'php', NULL);
