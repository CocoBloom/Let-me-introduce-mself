CREATE DATABASE IF NOT EXISTS IntroMyself;

DROP TABLE IF EXISTS user;
CREATE TABLE user
(id int auto_increment, name varchar(255) not null, email varchar(255) not null unique, password varchar(60) not null, reg_time timestamp default current_timestamp, primary key (id));

INSERT INTO user (name, email, password, reg_time)
VALUES ('Virag', 'virag@gmail.com', '$2y$10$GyP23S3k7TxLMca4io6zcOiAng6Gf/apagyOi.0SyJ4Jh81bQg/5i', NULL);
# passw: virag
INSERT INTO user (name, email, password, reg_time)
VALUES ('Coco', 'coco@gmail.com', '$2y$10$eEunDQy6E6Xma5TdPh2YAuaF7nWJDkKl.DZZIVmdG/IWa.Am/7crS', NULL);
# passw: coco
INSERT INTO user (name, email, password, reg_time)
VALUES ('CodeCool', 'codecool@gmail.com', '$2y$10$W65e614OJ8ZT9VbJXn7OH.5.h/x2TjOx8dlYY6SmT4gdk84mmrc0q', NULL);
# passw: codecool
INSERT INTO user (name, email, password, reg_time)
VALUES ('PHP', 'php@gmail.com', '$2y$10$2lQjM6j5gXrd4luAfTk5lOgzfZWDbLO7HzOp2CbUWK7vXVIFOS5MW', NULL);
# passw: php