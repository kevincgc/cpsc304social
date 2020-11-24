

INSERT INTO Users VALUES('beastWithDeepVoice', '1234', 'male', '2020-01-01', 'Raymond', NULL, 'Ng', '2020-09-07');
INSERT INTO Users VALUES('baldButBeautiful', '1234', 'male', '2000-01-02', 'Ed', NULL, 'Knorr','2020-09-07');
INSERT INTO Users VALUES('bigDaddy','420swag','male','1980-02-03','Elon',NULL,'Musk','2020-07-23');
INSERT INTO Users VALUES('heHasADream','hunter2','male','1960-02-03','Martin','Luther','King','2020-07-23');
INSERT INTO Users VALUES('greatEagle','maga2020!','male','1946-06-14','Donald','John','Trump','2020-09-07');

INSERT INTO Requester_Befriends_Requestee VALUES('greatEagle','bigDaddy');
INSERT INTO Requester_Befriends_Requestee VALUES('greatEagle','heHasADream');
INSERT INTO Requester_Befriends_Requestee VALUES('bigDaddy','heHasADream');
INSERT INTO Requester_Befriends_Requestee VALUES('beastWithDeepVoice','baldButBeautiful');
INSERT INTO Requester_Befriends_Requestee VALUES('heHasADream','beastWithDeepVoice');

INSERT INTO Groups VALUES(1,'greatEagle','MAGA',TRUE,'2016-11-09');
INSERT INTO Groups VALUES(2,'bigDaddy','Tesla',TRUE,'2003-07-01');
INSERT INTO Groups VALUES(3,'beastWithDeepVoice','CPSC304 101',FALSE,'2020-09-07');
INSERT INTO Groups VALUES(5,'baldButBeautiful','CPSC304 102',TRUE,'2020-09-07');
INSERT INTO Groups VALUES(6,'greatEagle','MAGA and Again',TRUE,'2020-10-22');


INSERT INTO Post VALUES(1,'bigDaddy',NULL,'2003-07-01 00:00:00', TRUE);
INSERT INTO Post VALUES(2,'greatEagle',NULL,'2020-10-10 12:00:00',FALSE);
INSERT INTO Post VALUES(3,'greatEagle',1,'2020-10-22 23:59:59', TRUE);
INSERT INTO Post VALUES(5,'bigDaddy',2,'2008-12-25 23:59:59',FALSE);
INSERT INTO Post VALUES(6,'heHasADream',NULL,'1963-08-28 15:00:00',TRUE);
INSERT INTO Post VALUES(7,'greatEagle',NULL,'2016-11-09 12:00:00',TRUE);
INSERT INTO Post VALUES(8,'greatEagle',1,'2016-11-09 12:00:00',TRUE);
INSERT INTO Post VALUES(9,'bigDaddy',NULL,'2008-12-25 13:00:00',TRUE);
INSERT INTO Post VALUES(10,'beastWithDeepVoice',NULL,'2020-10-23',TRUE);
INSERT INTO Post VALUES(11,'bigDaddy',NULL,'2020-08-31 09:00:00',TRUE);

INSERT INTO User_Likes_Post VALUES('bigDaddy', 5);
INSERT INTO User_Likes_Post VALUES('bigDaddy', 2);
INSERT INTO User_Likes_Post VALUES('greatEagle', 1);
INSERT INTO User_Likes_Post VALUES('beastWithDeepVoice', 2);
INSERT INTO User_Likes_Post VALUES('baldButBeautiful', 3);

INSERT INTO Blog VALUES(1,'I have just founded Tesla, INVEST',NULL,NULL);
INSERT INTO Blog VALUES(2,'I''m sad that nobody understands me','sadFaceSelfie.jpg',NULL);
INSERT INTO Blog VALUES(3,'My twitter got hacked!!!','surprisedFaceSelfie.jpg','presidentialReaction.mp4');
INSERT INTO Blog VALUES(5,'I have just launched the first car, INVEST',NULL,'newsHeadLine.mp4');
INSERT INTO Blog VALUES(6,'I have a dream','speech.jpg',NULL);

INSERT INTO Ad VALUES(7,0,48,'https://twitter.com/realDonaldTrump');
INSERT INTO Ad VALUES(8,2000,100,'https://twitter.com/realDonaldTrump');
INSERT INTO Ad VALUES(9,53000,500,'https://www.tesla.com');
INSERT INTO Ad VALUES(10,2147483648,1,'https://www.ubc.ca');
INSERT INTO Ad VALUES(11,330,24,'https://www.tesla.com');


INSERT INTO User_Joins_Group VALUES(1,'greatEagle');
INSERT INTO User_Joins_Group VALUES(2,'bigDaddy');
INSERT INTO User_Joins_Group VALUES(3,'beastWithDeepVoice');
INSERT INTO User_Joins_Group VALUES(5,'baldButBeautiful');
INSERT INTO User_Joins_Group VALUES(6,'greatEagle');
INSERT INTO User_Joins_Group VALUES(2,'beastWithDeepVoice');

INSERT INTO Group_Event VALUES(1,1,'Election 2016',TRUE,'2016-11-01 00:00:00','2016-11-08 00:00:00','2016-11-09 00:00:00','37188');
INSERT INTO Group_Event VALUES(2,6,'Election 2020',TRUE,'2020-10-01 00:00:00','2020-11-03 00:00:00','2020-11-04 00:00:00','20506');
INSERT INTO Group_Event VALUES(3,2,'Quarterly Disclosure 2020 Q3',TRUE,'2020-10-10 00:00:00','2020-10-21 19:00:00','2020-10-21 23:59:59','94304');
INSERT INTO Group_Event VALUES(4,2,'Model X Production',TRUE,'2015-01-01 00:00:00','2015-09-028 00:00:00','2015-01-21 23:59:59','75225');
INSERT INTO Group_Event VALUES(5,3,'Milestone 2 Deadline',FALSE,'2020-09-7 00:00:00','2020-10-23 00:00:00','2020-10-23 23:59:59','V6T1Z4');

INSERT INTO Chat VALUES(1);
INSERT INTO Chat VALUES(2);
INSERT INTO Chat VALUES(3);
INSERT INTO Chat VALUES(4);
INSERT INTO Chat VALUES(5);

INSERT INTO User_Participate_Chat VALUES('bigDaddy',1);
INSERT INTO User_Participate_Chat VALUES('beastWithDeepVoice',1);
INSERT INTO User_Participate_Chat VALUES('beastWithDeepVoice',2);
INSERT INTO User_Participate_Chat VALUES('baldButBeautiful',2);
INSERT INTO User_Participate_Chat VALUES('greatEagle',2);

INSERT INTO Message VALUES(1,1,'beastWithDeepVoice','2020-09-7 15:10:24','Hey');
INSERT INTO Message VALUES(2,1,'beastWithDeepVoice','2020-09-07 15:13:24','Hello?');
INSERT INTO Message VALUES(3,2,'beastWithDeepVoice','2020-09-07 15:15:00','Man, he doesn''t reply');
INSERT INTO Message VALUES(4,2,'baldButBeautiful','2020-09-7 23:00:12','He might have been busy shooting rockets');
INSERT INTO Message VALUES(5,2,'greatEagle','2020-09-14 12:23:07','Understandable');


INSERT INTO Comments VALUES(1,'bigDaddy',1,'EVERYONE INVEST','2020-07-01 15:00:00');
INSERT INTO Comments VALUES(2,'greatEagle',6,'I will maga','2016-11-08 13:00:00');
INSERT INTO Comments VALUES(3,'bigDaddy',1,'DON''T HESITATE','2020-07-01 18:00:00');
INSERT INTO Comments VALUES(4,'greatEagle',2,'Let me maga AGAIN','2020-10-10 12:03:53');
INSERT INTO Comments VALUES(5,'beastWithDeepVoice',6,'Great quote','1995-06-23');

INSERT INTO Calendar VALUES(1,'beastWithDeepVoice');
INSERT INTO Calendar VALUES(2,'baldButBeautiful');
INSERT INTO Calendar VALUES(3,'bigDaddy');
INSERT INTO Calendar VALUES(4,'heHasADream');
INSERT INTO Calendar VALUES(5,'greatEagle');

INSERT INTO Calendar_Records_Events VALUES(1,1,'2016-11-07 12:00:00');
INSERT INTO Calendar_Records_Events VALUES(1,5,'2020-08-10 00:00:00');
INSERT INTO Calendar_Records_Events VALUES(3,4,'2015-01-01 12:00:00');
INSERT INTO Calendar_Records_Events VALUES(5,1,'2016-11-07 07:00:00');
INSERT INTO Calendar_Records_Events VALUES(5,2,'2020-10-01 23:59:59');

INSERT INTO Postal_Code VALUES('37188','1600 Pennsylvania Avenue NW','Washington','DC');
INSERT INTO Postal_Code VALUES('94304','3500 Deer Creek Road','Palo Alto','CA');
INSERT INTO Postal_Code VALUES('20506','726 Jackson Pl NW','Washington','DC');
INSERT INTO Postal_Code VALUES('75225','8687 N Central Expy Suite #1027','Dallas','TX');
INSERT INTO Postal_Code VALUES('V6T1Z4','6371 Crescent Road','Vancouver','BC');

/*

SELECT username
FROM Users U
WHERE NOT EXISTS
      (SELECT G.group_id
       FROM Groups G
       WHERE NOT EXISTS
        (SELECT UJG.group_id
        FROM User_Joins_Group UJG
    WHERE UJG.username = U.username AND G.group_id = UJG.group_id));



SELECT Temp.username, Temp.birthday
FROM (SELECT username, birthday, AVG(price) average
      FROM Ad, Users, Post
      WHERE Users.username = Post.username AND Post.post_id = Ad.post_id
      GROUP BY username) as Temp
WHERE Temp.average = (SELECT MIN(Temp.average) FROM temp);
 */

 /*
 SELECT Temp.username, Temp.birthday
FROM (SELECT Users.username, Users.birthday, AVG(price) average
      FROM Ad, Users, Post
      WHERE Users.username = Post.username AND Post.post_id = Ad.post_id
      GROUP BY username) as Temp
WHERE Temp.average = (SELECT MIN(average) FROM Temp);
  */

