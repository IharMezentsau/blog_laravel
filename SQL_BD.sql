DROP SCHEMA IF EXISTS blog_user;
CREATE SCHEMA blog_user;
USE blog_user;

DROP TABLE IF EXISTS t_user;
CREATE TABLE t_user(
	`id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT UNIQUE,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL UNIQUE,
    `name` VARCHAR(255),
    `familyname` VARCHAR(255),
    `date` DATETIME,
    `avatar` VARCHAR(255) DEFAULT 'img/unknow.jpg',
    `sex` VARCHAR(1) DEFAULT 'U',
    `remember_token` VARCHAR(100)
    
);

DROP TABLE IF EXISTS t_message;
CREATE TABLE t_message (
	`id` INTEGER NOT NULL PRIMARY KEY UNIQUE AUTO_INCREMENT,
    `date` DATETIME NOT NULL,
    `user_id` INTEGER NOT NULL,
    `message` TEXT NOT NULL,
    
    FOREIGN KEY (user_id) REFERENCES t_user(id) ON UPDATE CASCADE ON DELETE CASCADE
    
);

DROP TABLE IF EXISTS t_answer_message;
CREATE TABLE t_answer_message (
	`id` INTEGER NOT NULL PRIMARY KEY UNIQUE AUTO_INCREMENT,
    `date` DATETIME NOT NULL,
    `user_id` INTEGER NOT NULL,
    `message_id` INTEGER NOT NULL,
    `answer` TEXT NOT NULL,
    
    FOREIGN KEY (user_id) REFERENCES t_user(id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (message_id) REFERENCES t_message(id) ON UPDATE CASCADE ON DELETE CASCADE
    
);

DROP TABLE IF EXISTS t_like;
CREATE TABLE t_like(
	`id` INTEGER NOT NULL PRIMARY KEY UNIQUE AUTO_INCREMENT,
    `message_id` INTEGER NOT NULL,
    `user_id` INTEGER NOT NULL,
    
    FOREIGN KEY (user_id) REFERENCES t_user(id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (message_id) REFERENCES t_message(id) ON UPDATE CASCADE ON DELETE CASCADE
);
DELETE FROM t_like WHERE `user_id`=1 AND `message_id`= 65;
SELECT * FROM t_like;
SELECT COUNT(user_id) FROM t_like WHERE message_id=66;
INSERT INTO t_user(email,password,name,date,validreg,avatar)
VALUE ('admin','admin','admin','2018-06-26 10:53:57',1,null);

INSERT INTO t_like(user_id, message_id) VALUE (1, 1);
INSERT INTO t_like(user_id, message_id) VALUE (1, 2);
INSERT INTO t_like(user_id, message_id) VALUE (1, 3);

INSERT INTO t_like(user_id, message_id) VALUE (1, 2);
INSERT INTO t_like(user_id, message_id) VALUE (1, 3);

INSERT INTO t_message(date, user_id, message) VALUE ('2018-06-26 10:53:571', 1,'hjhjadsvhjsdvhkjsdgkjsdfkjsgjjbdsvbhb');
INSERT INTO t_message(date, user_id, message) VALUE ('2018-06-26 10:53:571', 1, 'hjhjadsvhjsdvhjbdsvbhb');
INSERT INTO t_message(date, user_id, message) VALUE ('2018-06-26 10:53:571', 1, 'hjhjadsvdgfdhdfhsdfhsdfhhjsdvhjbdsvbhb');
INSERT INTO t_message(date, user_id, message) VALUE ('2018-06-26 10:53:571', 1, 'sdvhjbdsvbhb');

INSERT INTO t_answer_message(date, user_id, message_id, answer) VALUE ('2018-06-26 10:53:571', 1, 1, 'sdvhjbdsvbhb');
INSERT INTO t_answer_message(date, user_id, message_id, answer) VALUE ('2018-06-26 10:53:571', 1, 2, 'sdvhjbdsvbhdshsrhb');
INSERT INTO t_answer_message(date, user_id, message_id, answer) VALUE ('2018-06-26 10:53:571', 1, 3, 'sdvhjbdsvsdhdjbhb');
INSERT INTO t_answer_message(date, user_id, message_id, answer) VALUE ('2018-06-26 10:53:571', 1, 4, 'ssdfhsdfhdvhjbdsvbhb');
INSERT INTO t_answer_message(date, user_id, message_id, answer) VALUE ('2018-06-26 10:53:571', 1, 2, 'ssdfhsdfhdvhjbdsvbhb');
DELETE FROM t_like WHERE user_id=2 AND message_id=16;
SELECT * FROM blog_user.t_like;
SELECT COUNT(id) AS count FROM t_like WHERE user_id=2 AND message_id=1 LIMIT 1;
UPDATE t_user SET name='hee' WHERE id=2 LIMIT 1;
SELECT * FROM blog_user.t_user;
SELECT * FROM t_answer_message;
SELECT COUNT(id), id FROM t_user WHERE email='a@a.a' AND password='c612da2dba8fc89a6577324e21f71676' LIMIT 1;
SELECT * FROM t_answer_message;
SELECT * FROM t_message;
UPDATE t_user SET avatar='img/ava/12018_06_26_15_49_20.jpg' WHERE id=1 LIMIT 1;
SELECT t_message.id AS id_message,
                                                t_message.message AS message, 
                                                t_user.name AS user_name_message,
                                                t_message.date AS date_message,
                                                t_user.avatar AS avatar
                                                FROM t_message INNER JOIN 
                                                t_user ON t_message.user_id = t_user.id
                                                ORDER BY t_message.id ASC;
SELECT COUNT(t_answer_message.id) AS answer_count FROM t_answer_message 
                                                WHERE t_answer_message.message_id = 1;
                                                SELECT t_message.id AS id,
                                                t_message.message AS message, 
                                                t_user.name AS name,
                                                t_user.familyname AS familyname,
                                                t_message.date AS date,
                                                t_user.avatar AS avatar
                                                FROM t_message INNER JOIN 
                                                t_user ON t_message.user_id = t_user.id
                                                WHERE t_message.id = 1;
                                                
                                                
SELECT t_message.id AS id,
                                                t_message.message AS message, 
                                                t_user.name AS name,
                                                t_user.familyname AS familyname,
                                                t_message.date AS date,
                                                t_user.avatar AS avatar
                                                FROM t_message INNER JOIN 
                                                t_user ON t_message.user_id = t_user.id
																							