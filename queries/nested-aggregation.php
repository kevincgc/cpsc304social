<?php
    include '../connect.php';
    $conn = OpenCon();
    
    $sql = "SELECT temp.username, temp.birthday, temp.average, MIN(average)
            FROM (SELECT u.username, birthday, AVG(price) average
                    FROM ad a, users u, post p 
                    WHERE u.username = p.username AND p.post_id = a.post_id
                    GROUP BY username) AS temp";

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