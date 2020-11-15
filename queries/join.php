<?php
    include '../connect.php';
    $conn = OpenCon();

    $date = $_POST['date'];

    $sql = "SELECT username
            FROM Users U, Groups G
            WHERE U.username = G.username 
	            AND G.group_id IN (SELECT group_id
						            FROM Group_Event GE
						            WHERE GE.start_date = '$date');";

    $result = $conn->query($sql);

    if ($result) {
        echo "List Of Users<br /><br />";
        if ($result->num_rows > 0) {
            echo "<table><tr><th class='borderclass'>User Name</th><th class='borderclass'>Birthday</th></tr>";
            while($row = $result->fetch_assoc()) { 
                echo "<tr><td class='borderclass'>".$row["username"]."</td><td class='borderclass'>".$row["birthday"]."</td></tr>";
            }
            echo "</table>";
        }
    } else {
        echo "Sorry, something went wrong";
    } 

    CloseCon($conn);

?>