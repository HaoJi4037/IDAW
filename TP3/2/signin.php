<?php
    if(isset($_POST['login']) && isset($_POST['password'])) {
            $login=$_POST['login'];
            $password=$_POST['password'];
            $pseudo=$_POST['pseudo'];
        }
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tp3";
        

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
            die("connected failed: " . $conn->connect_error);
        } 
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO infos_user(login,password,pseudo)
            VALUES('$login','$password','$pseudo')";
    $conn -> exec($sql);
    echo 'Entrée ajoutée';
?>
