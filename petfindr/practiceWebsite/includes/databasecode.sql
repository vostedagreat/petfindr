CREATE TABLE  users
(
    id int(255) AUTO_INCREMENT PRIMARY KEY not null,
    jina varchar(255) not null,
    nenosiri varchar(255) not null,
    arafa varchar(255) not null
);

INSERT INTO users (id, jina, nenosiri, arafa )
    VALUES ('Daniel', 'Nielsen', 'usemmtuts@gmail.com', 'Admin', 'test123');