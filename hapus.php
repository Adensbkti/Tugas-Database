<?php
include 'database.php';
$db = new Database();

$id = $_GET['id'];
$db->deleteBook($id);

header("Location: index.php");
?>
