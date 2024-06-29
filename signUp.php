<?php include_once "includes/config.php"; ?>

<?php 
$username = x($_POST['username']);
$email = x($_POST['email']);
$age = x($_POST['age']);
$password = x($_POST['password']);
$gender = x($_POST['gender']);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if(empty($username) || empty($email)|| empty($age)|| empty($password) || empty($gender)){
  exit("تکایە خانەکان بە وردی پر بکەوە:(");
}
if(!$uppercase || !$lowercase ){
exit("پێویستە بەلایەنی کەمەوە پیتێکی کەپیتاڵی تێدا بێت..:(");
}
if( !$number || !$specialChars){
  exit("پێویستە ژمارە و هێمای تێدا بێت:)");
}if( strlen($password) < 8) {
  exit("پێویستە پاسۆردەکە لە هەشت پیت کەمتر نەبێت");
}
if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
  exit("ناوی بەکار هێنەر گونجاو نییە:(");
}
$checkUser = mysqli_query($conn,"SELECT username FROM user where username='$username' ");
if(mysqli_num_rows($checkUser)>0){
  exit("ئەم یوسەر نەیمە پێشتر بەکار هاتووە تکایە بیگۆڕە:)");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  print("ئیمەیڵەکەت گونجاو نییە:(") ;
}
$checkEmail = mysqli_query($conn,"SELECT `email` from `user` where `email`='$email'");
if(mysqli_num_rows($checkEmail)>0){
  exit("پێشتر ئەم ئیمەێڵە بەو ناوەوە دروست کراوە تکایە بیگۆرە:(");
}
if(!is_numeric($age) || $age <17 || $age>100){
  exit("تەمەنەکەت گونجاو نییە:)");
}
if(!is_numeric($gender)){
  exit("ڕەگەزەکەت گونجاو نییە:)");
}
$password = hash('gost',$password);
$success = mysqli_query($conn,"INSERT into user(username,email,password,age,gender)VALUES('$username','$email','$password','$age','$gender')");
if($success){
  // exit("success");
  echo '<script>window.location.href = "index.php"</script>';
}

?>