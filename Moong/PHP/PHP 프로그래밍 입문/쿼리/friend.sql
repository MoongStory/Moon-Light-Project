create table friend (
	num int not null auto_increment,
	name char(20) not null,
	tel char(20) not null,
	address char(80),
	primary key(num)
);

insert into member (name, tel, address) values ('송예진', '031-123-4567', '경기도 용인시 수지고 정평로 30');
insert into member (name, tel, address) values ('김수정', '031-333-4444', '양평군 지평면 묵방길 123번지');