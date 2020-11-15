<?php
    include '../connect.php';
    $conn = OpenCon();
    
    $count = $_POST['count'];
    $date = $_POST['date'];

    $sql = "SELECT username, birthday
            FROM Users
            WHERE birthday > '$date'
	            AND username IN	(SELECT username
					            FROM Post
					            GROUP BY username
					            HAVING COUNT(*) >= '$count');";

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