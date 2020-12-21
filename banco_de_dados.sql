CREATE DATABASE IF NOT EXISTS login_password_hash;

USE login_password_hash;

CREATE TABLE IF NOT EXISTS usuarios (
	id integer(11) not null AUTO INCREMENT PRIMARY KEY,
	nome varchar(100) not null,
	email varchar(100) not null,
	senha varchar(100) not null
);