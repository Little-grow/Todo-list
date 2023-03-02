<?php
if (isset($_GET['id'])) {
    // Connect to the database
    $dbhost = 'localhost';
    $dbuser = 'username';
    $dbpass = 'password';
    $dbname = 'todo_db';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM tasks WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Task deleted successfully";
    } else {
        echo "Error deleting task: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    header('Location: index.php');
    exit();
}
?>
