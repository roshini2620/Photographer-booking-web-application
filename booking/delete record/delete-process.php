<?php
include_once 'database.php';
$sql = "DELETE FROM booking WHERE User_name='" . $_GET["User_name"] . "'";
if (mysqli_query($conn, $sql)) {
    header("location:delete.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>