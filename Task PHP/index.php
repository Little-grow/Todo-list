<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<p>" . $row['description'] . "</p>";
    echo "<a href='delete_task.php?id=" . $row['id'] . "'>Delete</a>";
}
?>
