<?php 
include 'includes/config.php';
$content = x($_POST['content']);
$myfriend = x($_POST['myfriend']);
$query=mysqli_query($conn,"insert into `message`(`send_id`,`receive_id`,`message_content`)VALUES('$id','$myfriend','$content')");