<?php include_once "includes/config.php"; in(1);?>

<?php 
$username=x($_POST['search']);
users("WHERE username LIKE '%$username%' AND id!=$id",0);
?>


<?php include_once "footer.php"?>