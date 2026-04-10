<?php
$conn = mysqli_connect("localhost", "root", "", "project_db");

$name = $_POST['name'];
$message = $_POST['message'];

$sql = "INSERT INTO data (name, message) VALUES ('$name', '$message')";
mysqli_query($conn, $sql);

echo "Data saved successfully!";
?>