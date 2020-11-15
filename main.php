<?php
include 'connect.php';
$conn = OpenCon();
$inserSql = "SELECT username FROM users WHERE birthday BETWEEN 2020-01-01 AND 2020-02-01"




CloseCon($conn);
?>