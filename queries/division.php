<?php
    include '../connect.php';
    $conn = OpenCon();

    $sql = "SELECT U.username
            FROM Users U
            WHERE NOT EXISTS
                  (SELECT G.group_id
                   FROM Groups G
                   WHERE NOT EXISTS
                           (SELECT UJG.group_id
                           FROM User_Joins_Group UJG
                           WHERE UJG.username = U.username AND G.group_id = UJG.group_id));";


    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            echo "<table><tr><th class='borderclass'>User Name</th></tr>";
            while($row = $result->fetch_assoc()) { 
                echo "<tr><td class='borderclass'>".$row["username"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    } else {
        echo $conn;
        echo "Sorry, something went wrong";
    } 

    CloseCon($conn);

?>