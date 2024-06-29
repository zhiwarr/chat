<?php 
include 'includes/config.php';
  if(isset($_POST['myfriend'])){
    $myfriend=$_POST['myfriend'];
    ?>
<script>
let myfriend = <?php echo json_encode($myfriend);?>;
setTimeout(function() {

    $.post("message.php", {
        myfriend: myfriend
    }, function(response) {
        $(".content").html(response);
    });

}, 2000);
</script>
<?php
    
  
  send(" m JOIN user u ON (u.id=m.send_id) WHERE (send_id = $myfriend AND receive_id=$id) OR (m.send_id=$id AND m.receive_id=$myfriend )order by m.send_time ASC");
}
function send($condition){
    global $conn;
    global $id;
    $query = mysqli_query($conn,"SELECT * from `message`  $condition ");
    if(mysqli_num_rows($query)>0){
    while($row = mysqli_fetch_assoc($query)){
        $g = x($row['gender']);
        $user = x($row['send_id']);
        if($g==1){
          $gender = "boss";
        }else{
          $gender="woman";
        }
   ?>
<div class="media mt-3 d-flex <?php if($id !==$user){echo "my-message";}else{echo "your_message";}?> p-3 radius-10 shadow" <?php if($user !==$id){
  echo "userid=$user";
 }?>>
    <img src="assets/image/<?php echo $gender?>.png" class="ml-3 img-radius shadow align-self-start" width="40" alt="">
    <div class="media-body h-auto text-break">
        <h5 class="m-1"><?php echo $row['username'];?></h5>
        <?php  echo "<p style='text-wrap;'>" . x($row['message_content']) ."</p>"; ?>
    </div>
</div>


</div>
<?php }}
  else{
      echo "<h2 class='text-center mt-5 text-dark'>نامەیەکی نوێ بنێرە</h2>";
  }}?>