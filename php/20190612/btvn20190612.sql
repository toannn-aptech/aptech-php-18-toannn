CREATE DATABASE btvn20190612;
USE btvn20190612;


CREATE TABLE posts(
	id INT AUTO_INCREMENT PRIMARY KEY,
    title varchar(255)
);


INSERT INTO posts(title)
VALUES ('post 1') ,('post 2'), ('post 3'), ('post 4'), ('post 5');


CREATE TABLE categories(
	id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(255)
);


INSERT INTO categories(name)
VALUES ('thoi su'), ('kinh te'), ('something');



CREATE TABLE category_post(
	id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT,
    category_id INT,
    UNIQUE (post_id, category_id),
    FOREIGN KEY (post_id) REFERENCES posts(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);



INSERT INTO category_post (post_id, category_id)
VALUES (1,1), (1,2),(2,1),(1,3),(2,2);

SELECT * FROM category_post; 
SELECT * FROM category_post ORDER BY id;  

SELECT A.id, A.post_id, A.category_id, B.title, C.name FROM 
category_post as A
JOIN posts as B ON A.post_id = B.id
JOIN categories as C ON A.category_id = C.id
WHERE A.post_id = 1;

SELECT category_post.id, category_post.post_id, category_post.category_id, posts.title, categories.name FROM 
category_post
JOIN posts ON category_post.post_id = posts.id
JOIN categories ON category_post.category_id = categories.id
WHERE category_post.post_id = 1;


SELECT category_post.id, category_post.post_id, category_post.category_id, posts.*, categories.* FROM category_post, posts, categories
WHERE category_post.post_id = posts.id = 1 AND category_post.category_id = categories.id;


