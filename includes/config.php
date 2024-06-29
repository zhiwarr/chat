<?php

session_start();

$conn = new mysqli("localhost","zhiwar","root","chat");
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
 function x($data){
    global $conn;
     return  mysqli_real_escape_string($conn,htmlspecialchars($data));
}

function y(){
    echo "p-2 radius-10 mt-3 mb-3 border-0";
}
if(isset($_SESSION['id'])){
  global $conn;
  $id = $_SESSION['id'];
  $email = $_SESSION['email'];
  $username = $_SESSION['username'];
  $gender = $_SESSION['gender'];
  // $username = mysqli_query($conn,"SELECT `username` from `user` where `id`='$id'");
  // while ($row = $username->fetch_assoc()) {
  //   echo $row['username'];
// }

}
if(isset($_GET['logout'])){
  session_unset();
  session_destroy();
  unset($id);
  unset($username);
  unset($email);
  unset($gender);
  header("location:index.php");
}
function in($return){
  global $id;
  if($return === 1){
    if(!isset($id)){
      header("location:index.php");
    }
  }
  if($return === 0){
    if(isset($id)){
      header("location:profile.php");
    }
  }

}
function users($condition,$isAdd){
  global $conn;
  global $id;
  if(isset($_GET['accept'])){
    $accept = x($_GET['accept']);
    $query = mysqli_query($conn,"UPDATE `send_request` SET `is_accept`=1 WHERE `request_id` = '$accept' AND `response_id` ='$id'");
    header("location:profile.php");
  }
$search = mysqli_query($conn,"SELECT * from `user` $condition");
if(mysqli_num_rows($search)>0){
while($row = mysqli_fetch_assoc($search)){
  
  $g = $row['gender'];
  if($g==1){
    $gender = "boss";
  }else{
    $gender="woman";
  }
  $user_id = $row['id'];
  echo '
  <div style="position:relative;" class=" '; if($isAdd==1){echo "send_message";}echo ' d-flex m-2 bg-white p-2   radius-10 shadow" userid=';if($isAdd===1){echo $user_id;}echo '>
  <img src="assets/image/'.$gender.'.png"  alt="" class="img-radius shadow" width="40">
  <h3 class="m-2 text-grey">'.$row['username'].'</h3>';
  if($isAdd===0){
    $user_result_id = mysqli_query($conn,"SELECT * from `send_request` WHERE (request_id = '$user_id' OR request_id = ' $id ') AND (response_id=' $id ' OR response_id = '$user_id')");
   if(mysqli_num_rows($user_result_id)==0){
    echo '
    <img src="assets/image/add-friend.png" id="send" friend="'.$user_id.'" alt="" style="    position: absolute;
    left: 5px;
    top: 15px;" class="img-radius shadow" width="40">';
  //  }
   }
  }
  if($isAdd==2){
    echo '<a href=?accept='.$user_id.'><img src="assets/image/accept.png" id="accept" friend="'.$user_id.'" alt="" style="    position: absolute;
    left: 5px;
    top: 15px;" class="img-radius shadow" width="40"></a>';
  }
echo'</div>';

}

}else{
  echo "<div class='text-danger bg-dark bg-gradient mt-2 mb-2 text-white shadow p-3'>هیچ ئەنجامێک نەدۆزرایەوە</div>";
}
}

?>