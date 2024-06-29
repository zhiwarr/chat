<?php include_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/css/bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.rtl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php if(isset($id)){?>
    <nav class="navbar dropdown container radius-10 shadow navbar-expand-lg navbar-light bg-white">
        <ul class="navbar-nav mb-2 mb-lg-0 border-0">
            <li class="nav-item dropdown border-0">
                <a class="navbar-brand dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                    href=""><?php $search = mysqli_query($conn,"SELECT * from `user` where id=$id ");
if(mysqli_num_rows($search)>0){
while($row = mysqli_fetch_assoc($search)){
  $g = $row['gender'];
  if($g==1){
    $gender = "boss";
  }else{
    $gender="woman";
  }
 echo '<img src="assets/image/'.$gender.'.png" class="img-radius" width="40" alt="">';}}?><?php echo $username;?>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown-item">
                        <a class="nav-link text-dark dropdown-item" href="profile.php">چات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark dropdown-item" href="includes/feedback.php">پەیوەندی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger dropdown-item" href="?logout">چوونە دەرەوە</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- 
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
    </nav>
    <?php } ?>