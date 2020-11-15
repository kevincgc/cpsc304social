<?php
    include '../connect.php';
    $conn = OpenCon();

    $username = $_POST['username'];

    $sql = "SELECT COUNT(*) FROM user_participate_chat WHERE username = '$username' GROUP BY username"; 
    $result = $conn->query($sql)->fetch_assoc();
    if ($result) {
        echo "$username is in #". $result["COUNT(*)"]. " chats";
    } else {
        echo "Sorry, something went wrong";
    } 

    CloseCon($conn);

?>