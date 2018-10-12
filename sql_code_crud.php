<?php
$posts_create_table = 
`CREATE TABLE posts (
	id int(11) NOT null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) NOT null,
    content varchar(255) NOT null,
    date datetime not null
);`;
$posts_insert_data1 = 
`
INSERT INTO posts (subject, content, date) 
	VALUES (
		'Enjoying MySql', 
		'Some description here',
		'2018-11-14 9:11:00'
    );
`;
$posts_insert_data2 = 
`
INSERT INTO posts (subject, content, date) 
	VALUES (
		'Enjoying Php Code', 
		'Some description here',
		'2018-11-14 9:11:00'
    );
`;
$posts_update_data =
`
UPDATE posts
SET subject='Domz is awesome',
	content='This is updated content'
WHERE id=1
`;
$posts_delete_data = 
`
	DELETE from posts
	WHERE id=3
`;
$posts_order_by_data =
`
	SELECT * FROM `posts` ORDER BY id ASC
`;
// SELECT * FROM `posts` ORDER BY subject DESC
// SELECT * FROM `posts` ORDER BY id      DESC

