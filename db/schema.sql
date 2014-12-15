create table person(
	id integer primary key autoincrement,
	first varchar(255),
	last varchar(255),
	email varchar(320)
);

create table can_do(
	role integer,
	person integer,
	foreign key(role) references role(id),
	foreign key(person) references person(id),
	primary key (role, person)

);

create table role(
	id integer primary key autoincrement,
	title varchar(255),
	description varchar(500)
);

create table event(
	id integer primary key autoincrement,
	name varchar(255),
	location integer,
	start_date datetime,
	end_date datetime,
	foreign key(location) references location(id)
);

create table location(
	id integer primary key autoincrement,
	name varchar(255),
	address varchar(255),
);

create table event_role(
	id integer primary key autoincrement,
	event integer,
	role integer,
	admin integer,
	foreign key(event) references event(id),
	foreign key(role) references role(id),
	foreign key(admin) references person(id),
	primary key (event, role, person)
);

create table person_role(
	eventrole integer,
	person integer,
	foreign key(eventrole) references eventrole(id),
	foreign key(person) references person(id),
	primary key(eventrole, person)
);

create table admin(
	person integer primary key,
	congregation integer,
	foreign key(person) references person(id),
	foreign key(congregation) references congregation(id)
);

create table goes_to(
	person integer,
	congregation integer,
	foreign key(person) references person(id),
	foreign key(congregation) references congregation(id),
	primary key(person, congregation)
);

create table congregation(
	id integer primary key,
	location integer,
	start_date date,
	end_date date,
	foreign key(location) references location(id)
);

create table template(
	id integer,
	role integer,
	foreign key(role_id) references role(id),
	primary key(id, role)
);