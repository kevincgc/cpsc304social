<?php
    include '../connect.php';
    $conn = OpenCon();

    $username = $_POST['username'];

    $sql = "SELECT username, content, posted_date FROM comments WHERE username = '$username'"; 
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            echo "<table><tr><th class='borderclass'>User Name</th><th class='borderclass'>Content</th><th class='borderclass'>Posted Date</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td class='borderclass'>".$row["username"]."</td><td class='borderclass'>".$row["content"]."</td><td class='borderclass'>".$row["posted_date"]."</td></tr>";
            }
            echo "</table>";
        }
    } else {
        echo "Sorry, something went wrong";
    } 

    CloseCon($conn);

?>