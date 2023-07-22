<?php
include('config.php');
$fst_name = $_POST['fst_name'];
$mid_name = $_POST['mid_name'];
$lst_name = $_POST['lst_name'];
$birthday = $_POST['birthday'];
$city = $_POST['city'];
$email = $_POST['email'];
$number = $_POST['number'];

$sql = mysqli_query($db_connection, "INSERT INTO list_line(fst_name,mid_name,lst_name,birthday,city,email,number) VALUES('$fst_name', '$mid_name', '$lst_name', '$birthday', '$city', '$email', '$number')");

if ($sql==true) {
    Header('location:index.php');
    echo 'sucess';
}else{
    Header('location:index.php');
    echo 'problem';
}


