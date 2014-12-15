create table person(
	id integer primary key autoincrement,
	first text,
	last text,
);

create table cando(
	role integer primary key,
	person integer primary key,
	foreign key(role) references role(id),
	foreign key(person) references person(id)
);

create table role(
	id integer primary key autoincrement,
	title text,
	description text
);

create table event(
	id integer primary key autoincrement,
	name text,
	start_date datetime,
	end_date datetime
);

create table location(
	id integer primary key autoincrement,
	name text,
	address text,
	end_date datetime
);

create table eventrole(
	event integer primary key,
	role integer primary key,
	person integer primary key
	foreign key(event) references event(id),
	foreign key(role) references role(id),
	foreign key(person) references person(id)
);

create table admin(
	person integer primary key,
	location integer primary key,
	foreign key(person) references person(id),
	foreign key(location) references location(id)
);