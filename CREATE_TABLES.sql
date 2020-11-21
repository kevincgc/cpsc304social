CREATE DATABASE IF NOT EXISTS CPSC304_Project;

CREATE TABLE Users (
	username VARCHAR(20) NOT NULL,
	passwrd VARCHAR(20) NOT NULL,
	gender VARCHAR(20),
	birthday DATE,
	fname VARCHAR(20) NOT NULL,
	mname VARCHAR(20),
	lname VARCHAR(20) NOT NULL,
	date_of_registration DATE,
	PRIMARY KEY(username)
);

CREATE TABLE Requester_Befriends_Requestee (
	requester VARCHAR(20) NOT NULL,
	requestee VARCHAR(20) NOT NULL,
    FOREIGN KEY (requester) REFERENCES Users (username) ON DELETE CASCADE,
    FOREIGN KEY (requestee) REFERENCES Users (username) ON DELETE CASCADE,
	PRIMARY KEY (requester, requestee)
);

CREATE TABLE Groups(
	group_id INTEGER NOT NULL,
	username VARCHAR(20) NOT NULL,
	group_name VARCHAR(20),
	is_public BOOLEAN,
	creation_date DATE,
	PRIMARY KEY (group_id),
	FOREIGN KEY (username) REFERENCES Users (username) ON DELETE CASCADE
);

CREATE TABLE Post (
	post_id INTEGER NOT NULL,
	username VARCHAR(20) NOT NULL,
	group_id INTEGER,
	post_date DATETIME,
	is_public BOOLEAN,
	PRIMARY KEY (post_id),
	FOREIGN KEY (username) REFERENCES Users (username) ON DELETE CASCADE,
	FOREIGN KEY (group_id) REFERENCES Groups (group_id) ON DELETE CASCADE
);

CREATE TABLE User_Likes_Post (
	username VARCHAR(20) NOT NULL,
	post_id INTEGER NOT NULL,
    FOREIGN KEY (username) REFERENCES Users(username) ON DELETE CASCADE,
    FOREIGN KEY (post_id) REFERENCES Post(post_id) ON DELETE CASCADE,
	PRIMARY KEY (username, post_id)
);

CREATE TABLE Blog(
	post_id INTEGER NOT NULL,
	content VARCHAR(4000) NOT NULL,
	image BLOB,
	video BLOB,
	PRIMARY KEY (post_id),
	FOREIGN KEY (post_id) REFERENCES Post(post_id) ON DELETE CASCADE
);

CREATE TABLE Ad (
	post_id INTEGER NOT NULL,
	price INTEGER,
	duration INTEGER,
	link BLOB,
	PRIMARY KEY (post_id),
	FOREIGN KEY (post_id) REFERENCES Post(post_id) ON DELETE CASCADE
);


CREATE TABLE User_Joins_Group(
	group_id INTEGER NOT NULL,
	username VARCHAR(20) NOT NULL,
	FOREIGN KEY (group_id) REFERENCES Groups (group_id) ON DELETE CASCADE,
	FOREIGN KEY (username) REFERENCES Users (username) ON DELETE CASCADE,
	PRIMARY KEY (group_id, username)
);

CREATE TABLE Postal_Code(
	postal_code CHAR(6) NOT NULL,
	city VARCHAR(100) NOT NULL,
	province VARCHAR(100) NOT NULL,
	PRIMARY KEY (postal_code)
);

CREATE TABLE Group_Event(
	event_id INTEGER NOT NULL,
	group_id INTEGER NOT NULL,
	description VARCHAR(200),
	is_public BOOLEAN,
	creation_date DATETIME,
	start_date DATETIME,
	end_date DATETIME,
	postal_code CHAR(6),
	address VARCHAR(100),
	PRIMARY KEY (event_id),
	FOREIGN KEY (group_id) REFERENCES Groups (group_id) ON DELETE CASCADE,
	FOREIGN KEY (postal_code) REFERENCES Postal_Code (postal_code) ON DELETE CASCADE 
);

CREATE TABLE Chat (
    chat_id INTEGER NOT NULL,
    PRIMARY KEY (chat_id)
);

CREATE TABLE Message (
    message_id 	INTEGER NOT NULL,
    chat_id     INTEGER NOT NULL,
    username   	VARCHAR(20) NOT NULL,
    post_date   DATETIME,
    content     VARCHAR(200),
    PRIMARY KEY  (message_id, chat_id),
    FOREIGN KEY  (chat_id) REFERENCES Chat (chat_id) ON DELETE CASCADE,
    FOREIGN KEY  (username) REFERENCES Users (username) ON DELETE CASCADE
);

CREATE TABLE User_Participate_Chat(
    username   	VARCHAR(20) NOT NULL,
    chat_id     INTEGER NOT NULL,
    PRIMARY KEY (username, chat_id),
    FOREIGN KEY (username) REFERENCES Users (username) ON DELETE CASCADE,
    FOREIGN KEY (chat_id) REFERENCES Chat (chat_id) ON DELETE CASCADE
);

CREATE TABLE Comments(
    comment_id   INTEGER NOT NULL,
    username   	 VARCHAR(20) NOT NULL,
    post_id      INTEGER NOT NULL,
    content      VARCHAR(200),
    posted_date  DATETIME,
    PRIMARY KEY  (comment_id),
    FOREIGN KEY  (username) REFERENCES Users (username) ON DELETE CASCADE,
    FOREIGN KEY  (post_id) REFERENCES Post (post_id) ON DELETE CASCADE
);


CREATE TABLE Calendar(
    calendar_id 	INTEGER NOT NULL,
    username   	VARCHAR(20) NOT NULL,
    PRIMARY KEY  (calendar_id),
    FOREIGN KEY  (username) REFERENCES Users (username) ON DELETE CASCADE
);

CREATE TABLE Calendar_Records_Events(
	calendar_id INTEGER NOT NULL,
	event_id INTEGER NOT NULL,
	date_recorded DATETIME,
	FOREIGN KEY (calendar_id) REFERENCES Calendar (calendar_id) ON DELETE CASCADE,
	FOREIGN KEY (event_id) REFERENCES Group_Event (event_id) ON DELETE CASCADE,
	PRIMARY KEY (calendar_id, event_id)
);

