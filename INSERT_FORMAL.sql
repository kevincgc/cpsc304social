USE cpsc304_project;

INSERT INTO Users VALUES('r_ng', '1234', 'male', '2020-01-01', 'Raymond', NULL, 'Ng', '2020-09-07');
INSERT INTO Users VALUES('ed_knorr', '1234', 'male', '2000-01-02', 'Ed', NULL, 'Knorr','2020-09-07');
INSERT INTO Users VALUES('musk123','e_musk','male','1980-02-03','Elon',NULL,'Musk','2020-07-23');
INSERT INTO Users VALUES('amber_lee','password_123','female','1990-04-12','Amber',NULL,'Lee','2020-07-23');
INSERT INTO Users VALUES('j_nguyen','secure_password123','male','1946-06-14','Donald','John','Trump','2020-09-07');

INSERT INTO Requester_Befriends_Requestee VALUES('j_nguyen','musk123');
INSERT INTO Requester_Befriends_Requestee VALUES('j_nguyen','amber_lee');
INSERT INTO Requester_Befriends_Requestee VALUES('musk123','amber_lee');
INSERT INTO Requester_Befriends_Requestee VALUES('r_ng','ed_knorr');
INSERT INTO Requester_Befriends_Requestee VALUES('amber_lee','r_ng');
INSERT INTO Requester_Befriends_Requestee VALUES('amber_lee','musk123');
INSERT INTO Requester_Befriends_Requestee VALUES('ed_knorr','r_ng');
INSERT INTO Requester_Befriends_Requestee VALUES('r_ng','amber_lee');

INSERT INTO Groups VALUES(1,'j_nguyen','Proud Parents',TRUE,'2016-11-09');
INSERT INTO Groups VALUES(2,'musk123','Tesla',TRUE,'2003-07-01');
INSERT INTO Groups VALUES(3,'r_ng','CPSC304 101',FALSE,'2020-09-07');
INSERT INTO Groups VALUES(5,'ed_knorr','CPSC304 102',TRUE,'2020-09-07');
INSERT INTO Groups VALUES(6,'j_nguyen','Dog Lovers',TRUE,'2020-10-22');

INSERT INTO Post VALUES(1,'musk123',NULL,'2003-07-01 00:00:00', TRUE);
INSERT INTO Post VALUES(2,'j_nguyen',NULL,'2020-10-10 12:00:00',FALSE);
INSERT INTO Post VALUES(3,'j_nguyen',1,'2020-10-22 23:59:59', TRUE);
INSERT INTO Post VALUES(5,'musk123',2,'2008-12-25 23:59:59',FALSE);
INSERT INTO Post VALUES(6,'amber_lee',NULL,'1963-08-28 15:00:00',TRUE);
INSERT INTO Post VALUES(7,'j_nguyen',NULL,'2016-11-09 12:00:00',TRUE);
INSERT INTO Post VALUES(8,'j_nguyen',1,'2016-11-09 12:00:00',TRUE);
INSERT INTO Post VALUES(9,'musk123',NULL,'2008-12-25 13:00:00',TRUE);
INSERT INTO Post VALUES(10,'r_ng',NULL,'2020-10-23',TRUE);
INSERT INTO Post VALUES(11,'musk123',NULL,'2020-08-31 09:00:00',TRUE);
INSERT INTO Post VALUES(12,'amber_lee',NULL,'1981-08-28 12:00:00',FALSE);

INSERT INTO User_Likes_Post VALUES('musk123', 5);
INSERT INTO User_Likes_Post VALUES('musk123', 2);
INSERT INTO User_Likes_Post VALUES('j_nguyen', 1);
INSERT INTO User_Likes_Post VALUES('r_ng', 2);
INSERT INTO User_Likes_Post VALUES('ed_knorr', 3);

INSERT INTO Blog VALUES(1,'Tesla is the best electric car you can buy!',NULL,NULL);
INSERT INTO Blog VALUES(2,'What a beautiful day today!','rainbow.jpg',NULL);
INSERT INTO Blog VALUES(3,'Gotta love parenting','messy_face.jpg','son_eating_yogurt.mp4');
INSERT INTO Blog VALUES(5,'Welcome to our gigafactory',NULL,'gigafactory_tour.mp4');
INSERT INTO Blog VALUES(6,'Time for Christmas gift shopping!','metro_mall.jpg',NULL);

INSERT INTO Ad VALUES(7,0,48,'https://twitter.com/johhny_nguyen');
INSERT INTO Ad VALUES(8,2000,100,'https://twitter.com/johhny_nguyen');
INSERT INTO Ad VALUES(9,53000,500,'https://www.tesla.com');
INSERT INTO Ad VALUES(10,2147483648,1,'https://www.ubc.ca');
INSERT INTO Ad VALUES(11,330,24,'https://www.tesla.com');

INSERT INTO User_Joins_Group VALUES(1,'j_nguyen');
INSERT INTO User_Joins_Group VALUES(6,'musk123');
INSERT INTO User_Joins_Group VALUES(2,'musk123');
INSERT INTO User_Joins_Group VALUES(3,'r_ng');
INSERT INTO User_Joins_Group VALUES(5,'ed_knorr');
INSERT INTO User_Joins_Group VALUES(6,'j_nguyen');
INSERT INTO User_Joins_Group VALUES(2,'j_nguyen');
INSERT INTO User_Joins_Group VALUES(3,'j_nguyen');
INSERT INTO User_Joins_Group VALUES(5,'j_nguyen');
INSERT INTO User_Joins_Group VALUES(2,'r_ng');
INSERT INTO User_Joins_Group VALUES(1,'musk123');
INSERT INTO User_Joins_Group VALUES(5,'musk123');
INSERT INTO User_Joins_Group VALUES(3,'musk123');

INSERT INTO Postal_Code VALUES('37188','Washington','DC');
INSERT INTO Postal_Code VALUES('94304','Palo Alto','CA');
INSERT INTO Postal_Code VALUES('20506','Washington','DC');
INSERT INTO Postal_Code VALUES('75225','Dallas','TX');
INSERT INTO Postal_Code VALUES('V6T1Z4','Vancouver','BC');

INSERT INTO Group_Event VALUES(1,1,'Playdate Party',TRUE,'2016-11-01 00:00:00','2016-11-08 00:00:00','2016-11-09 00:00:00','37188','1600 Pennsylvania Avenue NW');
INSERT INTO Group_Event VALUES(2,6,'Dog Meet-up',TRUE,'2020-10-01 00:00:00','2020-11-03 00:00:00','2020-11-04 00:00:00','20506','726 Jackson Pl NW');
INSERT INTO Group_Event VALUES(3,2,'Quarterly Disclosure 2020 Q3',TRUE,'2020-10-10 00:00:00','2020-10-21 19:00:00','2020-10-21 23:59:59','94304','3500 Deer Creek Road');
INSERT INTO Group_Event VALUES(4,2,'Model X Production',TRUE,'2015-01-01 00:00:00','2015-09-028 00:00:00','2015-01-21 23:59:59','75225','8687 N Central Expy Suite #1027');
INSERT INTO Group_Event VALUES(5,3,'Milestone 3 Deadline',FALSE,'2020-09-7 00:00:00','2020-10-23 00:00:00','2020-10-23 23:59:59','V6T1Z4','6371 Crescent Road');

INSERT INTO Chat VALUES(1);
INSERT INTO Chat VALUES(2);
INSERT INTO Chat VALUES(3);
INSERT INTO Chat VALUES(4);
INSERT INTO Chat VALUES(5);

INSERT INTO User_Participate_Chat VALUES('musk123',1);
INSERT INTO User_Participate_Chat VALUES('r_ng',1);
INSERT INTO User_Participate_Chat VALUES('r_ng',2);
INSERT INTO User_Participate_Chat VALUES('ed_knorr',2);
INSERT INTO User_Participate_Chat VALUES('j_nguyen',2);

INSERT INTO Message VALUES(1,1,'r_ng','2020-09-7 15:10:24','Hey');
INSERT INTO Message VALUES(2,1,'r_ng','2020-09-07 15:13:24','Hello?');
INSERT INTO Message VALUES(3,2,'r_ng','2020-09-07 15:15:00','Man, he doesn''t reply');
INSERT INTO Message VALUES(4,2,'ed_knorr','2020-09-7 23:00:12','He might have been busy shooting rockets');
INSERT INTO Message VALUES(5,2,'j_nguyen','2020-09-14 12:23:07','Understandable');

INSERT INTO Comments VALUES(1,'musk123',1,'Invest in my company','2020-07-01 15:00:00');
INSERT INTO Comments VALUES(2,'j_nguyen',6,'I love my kids','2016-11-08 13:00:00');
INSERT INTO Comments VALUES(3,'musk123',1,'You won''t regret it','2020-07-01 18:00:00');
INSERT INTO Comments VALUES(4,'j_nguyen',2,'Dogs over cats','2020-10-10 12:03:53');
INSERT INTO Comments VALUES(5,'r_ng',6,'Great quote','1995-06-23');

INSERT INTO Calendar VALUES(1,'r_ng');
INSERT INTO Calendar VALUES(2,'ed_knorr');
INSERT INTO Calendar VALUES(3,'musk123');
INSERT INTO Calendar VALUES(4,'amber_lee');
INSERT INTO Calendar VALUES(5,'j_nguyen');

INSERT INTO Calendar_Records_Events VALUES(1,1,'2016-11-07 12:00:00');
INSERT INTO Calendar_Records_Events VALUES(1,5,'2020-08-10 00:00:00');
INSERT INTO Calendar_Records_Events VALUES(3,4,'2015-01-01 12:00:00');
INSERT INTO Calendar_Records_Events VALUES(5,1,'2016-11-07 07:00:00');
INSERT INTO Calendar_Records_Events VALUES(5,2,'2020-10-01 23:59:59');

