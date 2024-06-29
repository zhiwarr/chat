<?php include_once 'nav.php'; in(0);?>
<!-- <div class="data"></div>
<button class="btn btn-dark">click</button> -->
<div class="container m-auto w-25">
    <div id="loginForm" class="login-form p-3 w-100 d-flex flex-column col-lg-5 col-sm text-center m-auto loginForm">
        <img src="assets/image/messenger.png" class="m-auto" width="100" alt="">
        <div class="error bg-danger p-2 text-center text-white radius-10 d-none w-100"></div>

        <input style="direction:rtl;" type="email" name="email" id="loginEmail" placeholder="ئیمەیڵ داخڵ بکە..."
            class="<?php y();?>" />
        <input type="password" placeholder="پاسوۆرد داخڵ بکە..." class="<?php y();?>" name="password"
            id="loginPassword">
        <input id="login" type="submit" value="چوونە ژوورەوە" class="btn btn-danger p-2 shadow" name="login">
        <span class="signUpSpan mt-3 mb-3 radius-10  p-2 text-dark text-center" style="cursor:pointer;" id="signUpSpan">
            هەژمارێک دروست بکە</span>

    </div>
</div>
<?php include_once 'sign_Up.php'?>


<?php include_once 'footer.php';?>