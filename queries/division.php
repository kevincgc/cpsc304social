<?php
    include '../connect.php';
    $conn = OpenCon();

    $sql = "SELECT username
            FROM Users U
            WHERE NOT EXIST
	            ((SELECT G.group_id
	              FROM Groups G)
	              EXCEPT
	             (SELECT UJG.group_id
	              FROM User_Joins_Group UJG
	              WHERE UJG.username = U.username));";

    $result = $conn->query($sql);

    if ($result) {
        echo "List Of Users<br /><br />";
        if ($result->num_rows > 0) {
            echo "<table><tr><th class='borderclass'>User Name</th></tr>";
            while($row = $result->fetch_assoc()) { 
                echo "<tr><td class='borderclass'>".$row["username"]."</td></tr>";
            }
            echo "</table>";
        }
    } else {
        echo "Sorry, something went wrong";
    } 

    CloseCon($conn);

?>