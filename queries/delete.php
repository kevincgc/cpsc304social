<?php
    include '../connect.php';
    $conn = OpenCon();

    $username = $_POST['username'];

    $sql = "DELETE FROM Users WHERE username = '$username'"; 

    if ($conn->query($sql) === TRUE) {
        echo "User deleted<br /><br />";
        $selectSql = "SELECT * FROM users";
        $result = $conn->query($selectSql)->fetch_assoc();
        echo json_encode($result);
    } else {
        echo "Sorry, something went wrong";
    } 

    CloseCon($conn);

?>