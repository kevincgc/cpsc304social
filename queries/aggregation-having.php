<?php
    include '../connect.php';
    $conn = OpenCon();
    
    $count = $_POST['count'];
    $date = $_POST['date'];

    $sql = "SELECT U.username, COUNT(*) AS posts
            FROM Users U, Post P
            WHERE birthday > '$date' AND U.username = P.username
            GROUP BY U.username
            HAVING COUNT(*) > '$count';";

    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            echo "<table><tr><th class='borderclass'>User Name</th><th class='borderclass'>Posts</th></tr>";
            while($row = $result->fetch_assoc()) { 
                echo "<tr><td class='borderclass'>".$row["username"]."</td><td class='borderclass'>".$row["posts"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    } else {
        echo "Sorry, something went wrong";
    } 

    CloseCon($conn);

?>