create table person(
	id integer primary key autoincrement,
	first text,
	last text,
	email text
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
	location integer,
	start_date datetime,
	end_date datetime,
	foreign key(location) references location(id)
);

create table location(
	id integer primary key autoincrement,
	name text,
	address text,
	end_date datetime
);

-- create table eventrole(
-- 	id integer primary key autoincrement,
-- 	event integer,
-- 	role integer,
-- 	person integer,
-- 	admin integer,
-- 	foreign key(event) references event(id),
-- 	foreign key(role) references role(id),
-- 	foreign key(person) references person(id),
-- 	foreign key(admin) references person(id),
-- 	primary key (event, role, person)
-- );

create table personrole(
	eventrole integer,
	person integer,
	foreign key (eventrole) references eventrole(id),
	foreign key (person) references person(id),
	primary key (eventrole, person)
);

create table admin(
	person integer,
	location integer,
	foreign key(person) references person(id),
	foreign key(location) references location(id)
);