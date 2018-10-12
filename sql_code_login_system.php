<?php
$sql_create =
`CREATE TABLE users(
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_first	varchar(255) not null,
    user_last	varchar(255) not null,
    user_email varchar(255) not null,
    user_uid varchar(255) not null,
    user_pwd varchar(255) not null
)`;
$sql_insert_users =
`
	INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
	VALUES ('Domz','Garcia','dom.garcia@gmail.com','Admin','test123');
`;

