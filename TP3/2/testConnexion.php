<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connect fail: " . $conn->connect_error);
} $sql = "INSERT INTO user1 (id, login1, password1)
VALUES ('1', 'nihao1', 'hi1');";
$sql .= "INSERT INTO user1 (id, login1, password1)
VALUES ('2', 'nihao2', 'hi2');";
$sql .= "INSERT INTO user1 (id, login1, password1)
VALUES ('3', 'nihao3', 'hi3');";
 
if ($conn->multi_query($sql) === TRUE) {
    echo "insert success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>