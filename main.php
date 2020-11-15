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
  <?php
include 'connect.php';
$conn = OpenCon();

?>
  <html>
    <head>
        <title>CPSC 304 Social Media</title>
    </head>

    <body>
        <h2>User Creation (Insertion)</h2>
        <form method="post" action="main.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
                Username: <input type="text" name="username"> <br /><br />
                Password: <input type="text" name="password"> <br /><br />
                Birthday: <input type="text" name="birthday"> <br /><br />
                First Name: <input type="text" name="firstName"> <br /><br />
                Last Name: <input type="text" name="lastName"> <br /><br />

            <input type="submit" value="Submit" name="insertSubmit"></p>
        </form>

        <hr />

        <h2>DROP USER (Deletion)</h2>
        <form method="delete" action="main.php"> <!--refresh page when submitted-->
            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
            User Name: <input type="text" name="oldName"> <br /><br />

            <input type="submit" value="Submit" name="updateSubmit"></p>
        </form>

        <hr />

        <h2>Update User Info (Update)</h2>
        <form method="post" action="main.php"> <!--refresh page when submitted-->
            Old Name: <input type="text" name="oldName"> <br /><br />
            New Name: <input type="text" name="oldName"> <br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
        </form>

        <hr />

        <h2>Get Users By Birthday! (Selection)</h2>
        <form method="post" action="main.php"> <!--refresh page when submitted-->
            From: <input type="text" name="oldName"> <br /><br />
            To: <input type="text" name="oldName"> <br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
        </form>

        <hr />

        <h2>Get Comment Details (Projection)</h2>
        <form method="post" action="main.php"> <!--refresh page when submitted-->
            User Name: <input type="text" name="oldName"> <br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
            
        </form>

        <hr />

        <h2>Get Users Who Have An Event On The Date (Join)</h2>
        <form method="post" action="main.php"> <!--refresh page when submitted-->
            Date: <input type="text" name="oldName"> <br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
            
        </form>

        <hr />

        <h2>Get Number Of Involved Chats  (Aggregation with Group by)</h2>
        <form method="post" action="main.php"> <!--refresh page when submitted-->
            Username: <input type="text" name="oldName"> <br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
            
        </form>

        <hr />

        <h2>Get Users who are older than certain age and have posted more than certain number of blogs  (Aggregation with Having)</h2>
        <form method="post" action="main.php"> <!--refresh page when submitted-->
            Age: <input type="text" name="oldName"> <br /><br />
            Number Of Posts: <input type="text" name="oldName"> <br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
        
        </form>

        <hr />

        <h2>Get age of users where average price of their ads is... (Nested Aggregation with Group)</h2>
        <form method="post" action="main.php"> <!--refresh page when submitted-->
            Price: <input type="text" name="oldName"> <br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
        
        </form>

        <hr />

        <h2>Find Users who registered after certain date and posted their ads with price of (Division)</h2>
        <form method="post" action="main.php"> <!--refresh page when submitted-->
            Date: <input type="text" name="oldName"> <br /><br />
            Price: <input type="text" name="oldName"> <br /><br />
            Price: <input type="text" name="oldName"> <br /><br />
            Price: <input type="text" name="oldName"> <br /><br />
            <input type="submit" value="Submit" name="updateSubmit"></p>
        
        </form>

        <?php
		//this tells the system that it's no longer just parsing html; it's now parsing PHP

        $success = True; //keep track of errors so it redirects the page only if there are no errors
        $db_conn = NULL; // edit the login credentials in connectToDB()
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function printResult($result) { //prints results from a select statement
            echo "<br>Retrieved data from table demoTable:<br>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["NID"] . "</td><td>" . $row["NAME"] . "</td></tr>"; //or just use "echo $row[0]" 
            }

            echo "</table>";
        }

        function handleUpdateRequest() {
            global $db_conn;

            $old_name = $_POST['oldName'];
            $new_name = $_POST['newName'];

            // you need the wrap the old name and new name values with single quotations
            executePlainSQL("UPDATE demoTable SET name='" . $new_name . "' WHERE name='" . $old_name . "'");
            OCICommit($db_conn);
        }

        function handleResetRequest() {
            global $db_conn;
            // Drop old table
            executePlainSQL("DROP TABLE demoTable");

            // Create new table
            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE demoTable (id int PRIMARY KEY, name char(30))");
            OCICommit($db_conn);
        }

        function handleInsertRequest() {
            global $db_conn;

            //Getting the values from user and insert data into the table
            $tuple = array (
                ":bind1" => $_POST['insNo'],
                ":bind2" => $_POST['insName']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into demoTable values (:bind1, :bind2)", $alltuples);
            OCICommit($db_conn);
        }

        function handleCountRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT Count(*) FROM demoTable");

            if (($row = oci_fetch_row($result)) != false) {
                echo "<br> The number of tuples in demoTable: " . $row[0] . "<br>";
            }
        }

        // HANDLE ALL POST ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('updateQueryRequest', $_POST)) {
                    handleUpdateRequest();
                } else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                }

                disconnectFromDB();
            }
        }

        // HANDLE ALL GET ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('countTuples', $_GET)) {
                    handleCountRequest();
                }

                disconnectFromDB();
            }
        }

		if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>

