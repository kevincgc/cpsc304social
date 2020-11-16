#2. Deletion: Delete chat (all messages will be deleted)
DELETE FROM Users
WHERE username = '$chat_id';

#4. Selection: get all users whose birthdays are between January 1st and February 1st of 1997
SELECT username, birthday
FROM Users
WHERE birthday > $range_start AND birthday < $range_end;

#6. Join: get usernames of users who have an event on July 1st 
SELECT username
FROM Users U, Groups G
WHERE U.username = G.username 
	AND G.group_id IN (SELECT group_id
						FROM Group_Event GE
						WHERE GE.start_date = $date);

#8. Aggregation with Having: get the usernames of users who are at least 21 and have posted at least 2 blogs
SELECT username
FROM Users
WHERE birthday > 1999-11-14
	AND username IN	(SELECT username
					FROM Post
					GROUP BY username
					HAVING COUNT(*) >= 2);

#10. Division: find username of users who belong to every group.
SELECT username
FROM Users U
WHERE NOT EXIST
	((SELECT G.group_id
	  FROM Groups G)
	  EXCEPT
	 (SELECT UJG.group_id
	  FROM User_Joins_Group UJG
	  WHERE UJG.username = U.username));