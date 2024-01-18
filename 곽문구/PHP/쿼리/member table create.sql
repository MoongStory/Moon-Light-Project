create table member (
	num int not null auto_increment,
	id char(20) not null,
	name char(20) not null,
	gender char(1),
	post_num char(8),
	address char(80),
	tel char(20),
	age int,
	primary key(num)
);