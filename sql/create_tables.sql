drop table if exists messages;
drop table if exists member;


create table member(
	email	 					varchar(255),
	name 						varchar(255),
	password					varchar(255),
	primary key(email)
);

create table messages(
	email						varchar(255),
	date						timestamp,
	text						text,
	primary key(email,date),
	foreign key (email) references member(email)
);