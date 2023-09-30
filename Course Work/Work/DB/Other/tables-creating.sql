CREATE TABLE
    IF NOT EXISTS user_my(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
        name VARCHAR(64) NOT NULL,
        mail VARCHAR(128) NOT NULL,
        password VARCHAR(64) NOT NULL
    ) COMMENT 'User table';

CREATE TABLE
    IF NOT EXISTS joke(
        user_id INT NOT NULL,
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
        question VARCHAR(256) NOT NULL,
        answer VARCHAR(256) NOT NULL,
        FOREIGN KEY (user_id) REFERENCES user_my (id)
    ) COMMENT 'Joke table';