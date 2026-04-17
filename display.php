<?php
$conn = mysqli_connect("localhost", "root", "", "project_db");

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM data WHERE id=$id");
}

$result = mysqli_query($conn, "SELECT * FROM data");

echo "<h2>Messages</h2>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<p>";
    echo "<b>" . $row['name'] . "</b>: ";
    echo $row['message'];
    echo " <a href='?delete=" . $row['id'] . "'>Delete</a>";
    echo "</p>";
}
?>