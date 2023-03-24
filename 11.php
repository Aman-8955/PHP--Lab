<!-- 11. Write a PHP Script for establish connection using localhost and provide details that connection
established or not -->
<?php
$conn=mysqli_connect('localhost','root','');
$conn?print("Connected to db"):print("Failed to connect");
?>