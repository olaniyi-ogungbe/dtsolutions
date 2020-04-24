<?php
    include  '../include/db.php';
/*
    if(isset($_POST['submit'])){
    $username =  $_POST['username'];
    $password =  $_POST['password'];

    mysqli_real_escape_string($connection, $username);
    mysqli_real_escape_string($connection, $password);


  $query = "SELECT * FROM users WHERE username = '{$username}' " ;
  $select_user_query = mysqli_query($connection, $query);
  if(!$select_user_query){

    die("QUERY FAILED". mysqli_error($connection));
  }

  while ($row = mysqli_fetch_array($select_user_query) ) {
   
       $db_id = $row['id'];
       $db_user = $row['username'];
       $db_pass = $row['password'];

  }

  if($username !== $db_user && $password !== $d )



} */
if(isset($_POST['submit'])){
  $username =  $_POST['username'];
  $password =  $_POST['password'];
  if($username != "admin" && $password != "admin101" ){
    header("Location : index.php");
  }else{
    header("Location : dashboard.php");
  }
  
}

    

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>DT Solutions - ...You Think It, We Make It...</title>

    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/signin.css">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo/favicon.jpg">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="dashboard.php" method="post">
  <img class="mb-4" src="../img/logo/logo.png" alt="" >
  <h1 class="h3 mb-3 font-weight-normal" style="color: white">Please sign in</h1>
  <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y') ;?></p>
</form>
</body>
</html>
