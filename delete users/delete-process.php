<?php
include_once 'database.php';
$sql = "DELETE FROM signup WHERE username='" . $_GET["username"] . "'";
if (mysqli_query($conn, $sql)) {
    header("location:delete.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>