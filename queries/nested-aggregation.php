<?php
    include '../connect.php';
    $conn = OpenCon();

    $sql = "SELECT username, birthday, average
            FROM (SELECT users.username, birthday, AVG(price) average
                    FROM ad, users, post 
                    WHERE users.username = post.username AND post.post_id = ad.post_id
                    GROUP BY users.username) temp  
            WHERE average = (SELECT MIN(average) FROM temp)";

    $result = $conn->query($sql);

    if ($result) {
        echo "List Of Users<br /><br />";
        if ($result->num_rows > 0) {
            echo "<table><tr><th class='borderclass'>User Name</th><th class='borderclass'>Birthday</th><th class='borderclass'>Average Ads Price</th></tr>";
            while($row = $result->fetch_assoc()) { 
                echo "<tr><td class='borderclass'>".$row["username"]."</td><td class='borderclass'>".$row["birthday"]."</td><td class='borderclass'>".$row["average"]."</td></tr>";
            }
            echo "</table>";
        }
    } else {
        echo "Sorry, something went wrong <br />";
        echo $conn->error;
    } 

    CloseCon($conn);

?>