create table university(
	id integer primary key autoincrement,
	name text
);

create table course(
	id integer primary key autoincrement,
	crn integer,
	name text,
	subject text,
	course_number integer,
	university integer,
	term integer,
	foreign key(university) references university(id)
);

create table student(
	id integer primary key autoincrement,
	university integer,
	name text,
	email text,
	foreign key(university) references university(id)
);

create table instructor(
	id integer primary key autoincrement,
	university integer,
	name text,
	email text,
	foreign key(university) references university(id)
);

create table survey(
	id integer primary key autoincrement,
	university integer,
	student integer,
	instructor integer,
	term, integer,
	completed date,
	question_01 integer,
	question_02 integer,
	question_03 integer,
	question_04 integer,
	question_05 integer,
	question_06 integer,
	question_07 integer,
	question_08 integer,
	question_09 integer,
	question_10 integer,
	question_11 integer,
	question_12 integer,
	question_13 integer,
	foreign key(university) references university(id),
	foreign key(student) references student(id),
	foreign key(instructor) references instructor(id)
);
