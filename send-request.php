<?php 
include 'includes/config.php';
if(isset($_POST['friend_id'])){
   $friend_request = x($_POST['friend_id']);
   if(empty($friend_request)){
    exit("failed");
   }else{
   $requst = mysqli_query($conn,"SELECT * from `send_request` where (request_id = '$id' and response_id = '$friend_request')OR(request_id='$friend_request' and response_id ='$id') ");
   if(mysqli_num_rows($requst)==0){
   $success=mysqli_query($conn,"INSERT into send_request(request_id,response_id,is_accept)VALUES('$id','$friend_request',0)");
   if($success){
    exit("success");
   }
   }else{
exit("failed");
   }
   }
}else{
    exit("failed");
}