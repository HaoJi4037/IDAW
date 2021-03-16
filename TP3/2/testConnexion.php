<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp3";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$sql = "INSERT INTO user1 (id, login, password1)
VALUES ('1', 'nihao1', 'bonjour1');";
$sql .= "INSERT INTO user1 (id, login, password1)
VALUES ('2', 'nihao2', 'bonjour2');";
$sql .= "INSERT INTO user1 (id, login, password1)
VALUES ('3', 'nihao3', 'bonjour3');";
 
if ($conn->multi_query($sql) === TRUE) {
    echo "new ins";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>