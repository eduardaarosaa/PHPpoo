
create database banco_empresa;

use banco_empresa;

CREATE TABLE user (
    id int(3) auto_increment,
    firstName varchar(30),
    lastName varchar(40),
    age int(3),
    gender char(1),
    PRIMARY KEY (id)
);

CREATE TABLE employee (
    id_employee int(3) auto_increment,
    cargo varchar(30),
    salario varchar(40),
    PRIMARY KEY (id_employee)
);

