<?php
    include '../connect.php';
    $conn = OpenCon();
    
    $sql = "SELECT username, birthday, average
            FROM (SELECT users.username, birthday, AVG(price) average
                    FROM ad, users, post 
                    WHERE users.username = post.username AND post.post_id = ad.post_id
                    GROUP BY users.username) AS t  
            WHERE average = (SELECT MIN(average) FROM t)";

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
        echo "Sorry, something went wrong <br />";
        echo $conn->error;
    } 

    CloseCon($conn);

?>