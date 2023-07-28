<?php
include('config.php');
$id = $_GET['id']; 
$query = "DELETE FROM list_line  WHERE id=$id";
$sql = $db_connection->query($query);
if ($sql) {
    Header("location:index.php");
}else{
    Header("location:edit.php");
}
