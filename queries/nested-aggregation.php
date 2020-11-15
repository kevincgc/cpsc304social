<?php
    include '../connect.php';
    $conn = OpenCon();

    $sql = "SELECT temp.username, temp.birthday 
            FROM (SELECT username, birthday, AVG(price) AS average
                    FROM ad, users, post 
                    WHERE users.username = post.username AND post.post_id = ad.post_id
                    GROUP BY username) AS temp  
            WHERE temp.average = (SELECT MIN(temp.average) FROM temp)";

    $result = $conn->query($sql);
    // $temp = $result->fetch_assoc();
    // echo json_encode($temp);
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