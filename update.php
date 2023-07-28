<?php
include('config.php');
$id = $_GET['id'];
$fst_name = $_POST['fst_name'];
$mid_name = $_POST['mid_name'];
$lst_name = $_POST['lst_name'];
$birthday = $_POST['birthday'];
$city = $_POST['city'];
$email = $_POST['email'];
$number = $_POST['number'];
$query = "UPDATE list_line SET fst_name='$fst_name', mid_name='$mid_name', lst_name='$lst_name', birthday='$birthday', city='$city', email='$email', number='$number'  WHERE id=$id";
$sql = $db_connection->query($query);
if ($sql) {
    Header("location:index.php");
}else{
    Header("location:edit.php");
}
