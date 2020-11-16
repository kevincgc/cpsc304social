<?php
    include '../connect.php';
    $conn = OpenCon();

    $date = $_POST['date'];

    $sql = "SELECT U.username, GE.event_id, GE.description
            FROM Users U, Groups G, Group_Event GE
            WHERE U.username = G.username AND G.group_id = GE.group_id AND GE.start_date = '$date';";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th class='borderclass'>username</th><th class='borderclass'>event_id</th><th class='borderclass'>event_description</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) { 
            echo "<tr><td class='borderclass'>".$row["username"]."</td><td class='borderclass'>".$row["event_id"]."</td><td class='borderclass'>".$row["description"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    CloseCon($conn);


?>