<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}else{
    header("Location: https://drive.google.com/drive/folders/1x6oI0qJQ9m0hexUR5P-U4_LQBdJ726Du?usp=sharing");
}
?>