<?php
include 'config.php';

global $conn;
global $id;
$sql = mysqli_query($conn,"SELECT * from user where id='$id'");
$title=x($_POST['feedback_title']);
$description=x($_POST['feedback_description']);
$query = mysqli_query($conn,"insert into `feedback`(`title`,`description`,`id`)VALUES('$title','$description','$id')");
if($query){
     exit("فۆرمەکە بە سەرکووتی نێردرا .:)");
}

include '../footer.php';