<?php
session_start();
header('Content-type:text/html;charset=utf-8');
if(isset($_SESSION['username']) && $_SESSION['username']==='HaoJi'){
    echo "{$_SESSION['username']} welcome back";
    echo "<a href = 'logout.php'>logout</a>";
}else{
    echo "<a href = 'login.php'>log in plz</a>";
}
?>