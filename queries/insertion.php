<?php
    include '../connect.php';
    $conn = OpenCon();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'] ?: 'N/A';
    $birthday = $_POST['birthday'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'] ?: 'N/A';
    $lastName = $_POST['lastName'];
    $creationDate = date("Y-m-d");

    $sql = "INSERT INTO Users (
         username,
         passwrd,
         gender,
         birthday,
         fname,
         mname,
         lname,
         date_of_registration)
    VALUES (
            '$username',
            '$password',
            '$gender',
            '$birthday',
            '$firstName',
            '$middleName',
            '$lastName',
            '$creationDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Successfully created account <br /><br />";

        $showAllUsers = "SELECT username, fname, lname FROM users";
        $res = $conn->query($showAllUsers);

        if ($res->num_rows > 0) {
            echo "<table><tr><th class='borderclass'>User Name</th><th class='borderclass'>First Name</th><th class='borderclass'>Last Name</th></tr>";
            while($row = $res->fetch_assoc()) {
                echo "<tr><td class='borderclass'>".$row["username"]."</td><td class='borderclass'>".$row["fname"]."</td><td class='borderclass'>".$row["lname"]."</td></tr>";
            }
            echo "</table>";
        }
    } else {
        echo "Sorry, something went wrong<br />";
        echo $conn->error;
    }


    CloseCon($conn);

?>
