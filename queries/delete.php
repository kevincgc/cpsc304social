<?php
    include '../connect.php';
    $conn = OpenCon();

    $username = $_POST['username'];

    $sql1 = "DELETE FROM Users WHERE username = '$username'"; 
    $result1 = $conn->query($sql1);
    $sql = "SELECT username from Users;";
    $result = $conn->query($sql);
    echo "User ";
    echo $username;
    echo " deleted";
    echo "<br><br><br><br>";
    if ($result->num_rows > 0) {
        echo "<table><tr><th class='borderclass'>username</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) { 
            echo "<tr><td class='borderclass'>".$row["username"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    CloseCon($conn);


?>