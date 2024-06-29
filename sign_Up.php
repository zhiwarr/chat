<?php include_once 'nav.php';?>
<div class="container m-auto w-25  col-sm-12 ">
    <div id="signUpForm"
        class="p-3 mt-3 d-none w-100 d-flex shadow  flex-column col-lg-12 col-sm text-center m-auto signUpForm">
        <img src="assets/image/messenger.png" class="m-auto" width="100" alt="">
        <div class="error bg-danger p-2 text-center text-white radius-10 d-none w-100"></div>

        <input type="text" name="username" placeholder="ناو" id="username" class="<?php y();?>" />
        <input type="email" name="email" placeholder="ئیمەیڵ" id="signUpEmail" class="<?php y();?>  "
            style="direction: rtl;" />
        <input type="password" id="signUpPassword" name="password" placeholder="وشەی نهێنی" class="<?php y();?>" />
        <input type="number" name="age" placeholder="تەمەن" id="age" style="direction: rtl;" class="<?php y();?>" />
        <select name="gender" class="w-100 <?php y();?>" id="gender">
            <option selected disabled>ڕەگەز</option>
            <option value="1">نێر</option>
            <option value="2">مێ</option>
            <option value="3">جگە لەمانە</option>
        </select>
        <input id="signUp" type="submit" value=" هەژمارەکە دروست بکە" class="btn btn-danger radius-10 p-2 shadow"
            name="signUp">
        <span class="loginSpan mt-3 mb-3  p-2 text-dark text-center" style="cursor:pointer;" id="loginSpan">چوونە
            ژوورەوە</span>

    </div>
</div>

<?php include_once 'footer.php';?>