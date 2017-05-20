CREATE TABLE users
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    password VARCHAR(50),
    profile_pic VARCHAR(100),
    bio VARCHAR(1500)
);

CREATE TABLE blogs
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30),
    content TEXT,
    date_submitted VARCHAR(30),
    user_id INT NOT NULL,
    FOREIGN KEY(user_id)
    REFERENCES users(id)
);