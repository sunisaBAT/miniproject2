create Table member(
rus_ID int(4) not null,
rus_name varchar(30) not null,
rus_surname varchar(30) not null,
rus_position varchar(100) not null,
rus_salary int(6) not null,
primary key (rus_ID)
);
INSERT INTO member (rus_ID,rus_name,rus_surname,rus_position,rus_salary)
values('1004','sunisa','kajareon','web programmer','25000');