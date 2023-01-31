CREATE TABLE user_types
(
	id INT(3) NOT NULL AUTO_INCREMENT,
	user_type VARCHAR(100),
	PRIMARY KEY (id)
);

CREATE TABLE users
(
	id INT(11) NOT NULL AUTO_INCREMENT,
	user_type_id INT(3),
	username VARCHAR(100),
	password VARCHAR(500),
	user_status INT(2),
	last_successful_login DATETIME DEFAULT '1900-01-01 00:00:00',
	last_failed_login DATETIME DEFAULT '1900-01-01 00:00:00',
	PRIMARY KEY (id),
	FOREIGN KEY (user_type_id) REFERENCES user_types(id)
);

CREATE TABLE customers
(
	id INT(11) NOT NULL AUTO_INCREMENT,
	username VARCHAR(100),
	password VARCHAR(500),
	first_name VARCHAR(200),
	surname VARCHAR(200),
	email VARCHAR(100),
	customer_status INT(2),
	last_successful_login DATETIME DEFAULT '1900-01-01 00:00:00',
	last_failed_login DATETIME DEFAULT '1900-01-01 00:00:00',
	PRIMARY KEY (id)
);

CREATE TABLE bookings
(
	id INT(11) NOT NULL AUTO_INCREMENT,
	customer_id INT(11),
	checkin_date DATE,
	checkout_date DATE,
	location VARCHAR(100),
	no_of_rooms INT(3),
	no_of_guests INT(5),
	booking_status VARCHAR(100),
	PRIMARY KEY (id)
);

CREATE TABLE reviews
(
	id INT(11) NOT NULL AUTO_INCREMENT,
	reviewer_name VARCHAR(200),
	reviewer_contactno VARCHAR(100),
	reviewer_email VARCHAR(200),
	rating INT(1),
	reviewer_context VARCHAR(2000),
	isAnnoymous BOOLEAN,
	PRIMARY KEY (id)
);

CREATE TABLE contents
(
	id INT(11) NOT NULL AUTO_INCREMENT,
	content_caption VARCHAR(100),
	content_description VARCHAR(1000),
	content_page VARCHAR(100),
	content_sorting_number INT(2),
	user_id INT(11),
	content_status INT(2),
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE contacts
(
	id INT(11) NOT NULL AUTO_INCREMENT,
	name VARCHAR(200),
	email VARCHAR(200),
	contact_no VARCHAR(100),
	message_text VARCHAR(2000),
	PRIMARY KEY (id)
);

CREATE TABLE site_preferences
(
	id INT(2) NOT NULL AUTO_INCREMENT,
    total_views INT(11) DEFAULT 0,
    PRIMARY KEY (id)
);