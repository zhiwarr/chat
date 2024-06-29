<?php include_once "includes/config.php"; ?>

<?php 
$email = x($_POST['loginEmail']);
$password = x($_POST['loginPassword']);
if(empty($email)|| empty($password)){
    exit("تکایە خانەکان بە وردی پر بکەوە(:");
}
$password = hash("gost",$password);
$success = mysqli_query($conn,
"SELECT * from user where `email` = '$email' AND `password` = '$password'");
if(mysqli_num_rows($success) > 0){
    while($row = mysqli_fetch_assoc($success)){
      $_SESSION['id'] = $row['id'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['gender'] = $row['gender'];
     
    }
    // exit("success");
    echo '<script>window.location.href = "profile.php"</script>';
    // header("location:profile.php");
}
else{
  exit("ئیمەیڵ یان پاسۆرد هەڵەیە");
}

?>