<?php
include '../db/db_connection.php';

$delid=$_GET['id'];
$delet="DELETE FROM products WHERE id =$delid";
$mysqli->query($delet);

header("location:index.php");

?>