<?php
    include '../connect.php';
    $conn = OpenCon();

    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $sql = "SELECT username, birthday FROM Users WHERE birthday > '$startDate' AND birthday < '$endDate'"; 
    $result = $conn->query($sql);

    if ($result) {
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