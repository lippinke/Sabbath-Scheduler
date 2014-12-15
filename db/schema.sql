create table person(
	id integer primary key autoincrement,
	first text,
	last text
);

create table cando(
	role integer,
	person integer,
	foreign key(role) references role(id),
	foreign key(person) references person(id),
	primary key (role, person)

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
	event integer,
	role integer,
	person integer,
	foreign key(event) references event(id),
	foreign key(role) references role(id),
	foreign key(person) references person(id),
	primary key (event, role, person)
);

create table admin(
	person integer,
	location integer,
	foreign key(person) references person(id),
	foreign key(location) references location(id),
	primary key (person, location)
);