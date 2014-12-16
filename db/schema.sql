CREATE TABLE person(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	first VARCHAR(255),
	last VARCHAR(255),
	email VARCHAR(320)
);

CREATE TABLE can_do(
	role INTEGER,
	person INTEGER,
	FOREIGN KEY (role) REFERENCES role(id) ON DELETE CASCADE,
	FOREIGN KEY (person) REFERENCES person(id) ON DELETE CASCADE,
	PRIMARY KEY (role, person)

);

CREATE TABLE role(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(255),
	description VARCHAR(500)
);

CREATE TABLE event(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	location INTEGER,
	start_date DATETIME,
	end_date DATETIME,
	FOREIGN KEY (location) REFERENCES location(id) ON DELETE SET NULL
);

CREATE TABLE location(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	address VARCHAR(255)
);

CREATE TABLE event_role(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	event INTEGER,
	role INTEGER,
	start DATETIME,
	end DATETIME,
	FOREIGN KEY (event) REFERENCES event(id) ON DELETE CASCADE,
	FOREIGN KEY (role) REFERENCES role(id) ON DELETE CASCADE,
	PRIMARY KEY (event, role, person)
);

CREATE TABLE person_role(
	eventrole INTEGER,
	person INTEGER,
	admin INTEGER,
	FOREIGN KEY (eventrole) REFERENCES eventrole(id) ON DELETE CASCADE,
	FOREIGN KEY (person) REFERENCES person(id) ON DELETE CASCADE,
	FOREIGN KEY (admin) REFERENCES person(id) ON DELETE SET NULL,
	PRIMARY KEY (eventrole, person)
);

CREATE TABLE admin(
	person INTEGER PRIMARY KEY,
	congregation INTEGER,
	FOREIGN KEY(person) REFERENCES person(id) ON DELETE CASCADE,
	FOREIGN KEY(congregation) REFERENCES congregation(id) ON DELETE CASCADE
);

CREATE TABLE goes_to(
	person INTEGER,
	congregation INTEGER,
	FOREIGN KEY(person) REFERENCES person(id) ON DELETE CASCADE,
	FOREIGN KEY(congregation) REFERENCES congregation(id) ON DELETE CASCADE,
	PRIMARY KEY(person, congregation)
);

CREATE TABLE congregation(
	id INTEGER PRIMARY KEY,
	location INTEGER,
	start_date date,
	end_date date,
	FOREIGN KEY(location) REFERENCES location(id) ON DELETE SET NULL
);

CREATE TABLE template(
	id INTEGER,
	role INTEGER,
	FOREIGN KEY(role_id) REFERENCES role(id) ON DELETE CASCADE,
	PRIMARY KEY(id, role)
);