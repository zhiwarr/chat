<?php include_once 'nav.php';?>
<div class="container blur-3 sm mt-5 w-75 m-auto  radius-20 bg-contact  shadow  " dir="rtl">
    <h2 class="text-bold text-white mt-4 text-center">پەیوەندیمان پێوە بکە دەربارەی هەر کێشەیەک</h2>
    <div class="d-flex">
        <div class="col-lg-6 col-sm contact-img">
            <img src="assets/image/support.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 container" id="feedback">
            <div class="p-1">
                <div class="success bg-danger p-2 d-none"></div>
                <input type="text" name="title" id="feedback_title"
                    class="form-control shadow mt-3 form-control-lg border-0 radius-20"
                    placeholder="ناوی کێشەکە بنوسە....):">
                <textarea class="form-control  mt-3 form-control-lg shadow border-0 radius-20" name="description"
                    id="feedback_description" placeholder="زانیاری زیاتر دەربارەی کێشەکە ....):" cols="75"
                    rows="10"></textarea>
                <input type="submit" id="fsubmit" name="fsubmit" value="ناردن"
                    class=" text-white  p-2  radius-10 w-100 mt-2 btn-warning">
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php';?>

<script>

</script>