<?php
require_once "conn.php";

$id = $_GET["id"];
$query = "DELETE FROM beli WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Something went wrong. Please try again later.";
}
?>