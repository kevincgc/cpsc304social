<?php
    include '../connect.php';
    $conn = OpenCon();

    $oldName = $_POST['oldName'];
    $newName = $_POST['newName']; 

    $sql = "UPDATE users SET username = '$newName' WHERE username = '$oldName'"; 

    if ($conn->query($sql) === TRUE) {
        echo "Successfully updated account <br /><br />";
        $selectSql = "SELECT * FROM users WHERE username = '$newName'";
        $result = $conn->query($selectSql)->fetch_assoc();
        echo json_encode($result);
    } else {
        echo "Sorry, something went wrong";
    } 

    CloseCon($conn);

?>