<?php include_once 'nav.php'; in(1);

?>
<!-- friend request -->
<div class=" row m-5 w-100 justify-content-center">
    <div class=" col-sm-3 m-2  bg-gradient bg-light radius-10 p-3">
        <input type="text" id="search" name="search" placeholder="بۆ ناوێک بگەڕێ..." class="<?php y();?> w-100 shadow ">
        <div class=" row mb-2 bg-grediant bg-info p-2 d-none search_data radius-10 shadow"></div>
        <div class="dropdown">
            <span class=" p-3 radius-10 btn-danger dropdown-toggle" type="button" id="dropdownMenuButton2"
                data-bs-toggle="dropdown" aria-expanded="false">
                لیستی ئادە نێردراوەکان
            </span>
            <div class="dropdown-menu w-75 ml-5 text-center fw-bold dropdown-menu"
                aria-labelledby="dropdownMenuButton2">
                <?php
     $query =  mysqli_query($conn,"SELECT * from `send_request` where (`response_id`=$id and `is_accept`= 0)");
     if(mysqli_num_rows($query)>0){
      while($row = mysqli_fetch_assoc($query)){
        $request = $row['request_id'];
        echo '<div class="dropdown-item  pl-4">'.users(" WHERE `id`='$request'",2).'</div>';
       }
     }else{
      echo "بەتاڵە";
     }
    ?>
            </div>
        </div>
        <hr>
        <span class="text-danger  m-2">لیستی هاوڕێکانم:)</span>
        <?php 
users(" u JOIN send_request sr ON (sr.request_id='$id' OR sr.response_id='$id') AND (u.id = sr.response_id OR u.id = sr.request_id) WHERE sr.is_accept = 1 AND u.id <> '$id'",1);
?>
    </div>


    <!-- message content -->
    <div class="col-sm-7 message   m-2 bg-gradient bg-light radius-10 p-3 d-none">
        <div class="content">
            <!-- procces image -->

        </div>
        <div class="d-flex">
            <input id="message_content" type="text" placeholder="مەسج بنوسە..." class="<?php y();?> w-100">
            <button id="send_message_btn" class="btn btn-primary align-self-center ">ناردن</button>
        </div>

    </div>
</div>
<?php include_once 'footer.php';?>
<script>


</script>