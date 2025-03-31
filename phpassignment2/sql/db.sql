CREATE DATABASE db;
USE db;

CREATE table phpUsers(
	userId int not null auto_increment,
	firstName varchar (255),
	lastName varchar (255),
	username varchar (255),
	password varchar (255),
    primary key (userId)
);

INSERT INTO phpUsers ('firstName', 'lastName', 'username', 'password')
VALUES ('nicholas', 'fairweather', 'fakepig20', 'legoman')