<!--Test Oracle file for UBC CPSC304 2018 Winter Term 1
  Created by Jiemin Zhang
  Modified by Simona Radu
  Modified by Jessica Wong (2018-06-22)
  This file shows the very basics of how to execute PHP commands
  on Oracle.
  Specifically, it will drop a table, create a table, insert values
  update values, and then query for values

  IF YOU HAVE A TABLE CALLED "demoTable" IT WILL BE DESTROYED

  The script assumes you already have a server set up
  All OCI commands are commands to the Oracle libraries
  To get the file to work, you must place it somewhere where your
  Apache server can run it, and you must rename it to have a ".php"
  extension.  You must also change the username and password on the
  OCILogon below to be your ORACLE username and password -->
  <html>
    <head>
        <title>CPSC 304 Project - Social Media</title>
    </head>

    <body>
        <h2>User Creation (Insertion)</h2>
        <form method="post" action="queries/insertion.php">

                Username: <input type="text" name="username" required> <br /><br />
                Password: <input type="password" name="password" required> <br /><br />
                Gender: <input type="text" name="gender"> <br /><br />
                Birthday: <input type="date" name="birthday" required> <br /><br />
                First Name: <input type="text" name="firstName" required> <br /><br />
                Middle Name: <input type="text" name="middleName"> <br /><br />
                Last Name: <input type="text" name="lastName" required> <br /><br />

            <input type="submit" value="Submit"></p>
        </form>

        <hr />

        <h2>Delete User (Deletion)</h2>
        <form method="post" action="queries/delete.php">
            User Name: <input type="text" name="username" required> <br /><br />
            <input type="submit" value="Submit"></p>
        </form>

        <hr />

        <h2>Update User Info (Update)</h2>
        <form method="post" action="queries/update.php">
            Old Name: <input type="text" name="oldName" required> <br /><br />
            New Name: <input type="text" name="newName" required> <br /><br />
            <input type="submit" value="Submit"></p>
        </form>

        <hr />

        <h2>Get Users By Birthday Range! (Selection)</h2>
        <form method="post" action="queries/selection.php">
            From: 	<input type="date" name="startDate" required> <br /><br />
            To: 	<input type="date" name="endDate" required> <br /><br />
            <input type="submit" value="Submit"></p>
        </form>

        <hr />

        <h2>Get A User's Comments (Projection)</h2>

        <form method="post" action="queries/projection.php">
            User Name: <input type="text" name="username" required> <br /><br />
            <input type="submit" value="Submit"></p>

        </form>

        <hr />

        <h2>Get Users Who Have An Event On The Date (Join)</h2>
        <form method="post" action="queries/join.php">
            Date: <input type="date" name="date"> <br /><br />
            <input type="submit" value="Submit"></p>

        </form>

        <hr />

        <h2>Get Number Of Involved Chats  (Aggregation with Group by)</h2>
        <form method="post" action="queries/aggregation-groupby.php">
            User Name: <input type="text" name="username" required> <br /><br />
            <input type="submit" value="Submit"></p>

        </form>

        <hr />

        <h2>Get Users whose birthday is after a certain date and have posted more than certain number of blogs  (Aggregation with Having)</h2>
        <form method="post" action="queries/aggregation-having.php">
            Birthday: <input type="date" name="date"> <br /><br />
            Number Of Posts: <input type="text" name="count"> <br /><br />
            <input type="submit" value="Submit"></p>
        </form>

        <hr />

        <h2>Get users where their average price of their ads is minimum over all users (Nested Aggregation with Group)</h2>
        <form method="get" action="queries/nested-aggregation.php">
            <input type="submit" value="Check"></p>

        </form>

        <hr />

        <h2>Find username of users who belong to every group. (Division)</h2>
        <form method="post" action="queries/division.php">
            <input type="submit" value="Submit"></p>
        </form>
	</body>
</html>
