<?php
  require_once '../include/db.php';
  if(isset($_POST['submit'])){
            $port_title        = $_POST['port_title'];
            $port_category     = $_POST['port_category'];
            $port_client     = $_POST['port_client'];
    
            $port_image        = $_FILES['port_image']['name'];
            $port_image_temp   = $_FILES['port_image']['tmp_name'];
    
    
            $port_website         = $_POST['port_website'];
            $port_content      = $_POST['port_content'];
            $port_date         = date('d-m-y'); 

            move_uploaded_file($port_image_temp, "../img/images/siteimages/$port_image" );
       
          
          $query = "INSERT INTO port(port_date, port_client,port_title,port_category,port_image,port_content,port_website) 
          
          VALUES( now(),'{$port_client}','{$port_title}','{$port_category}','{$port_image}', '{$port_content}' , '{$port_website}') "; 
                
          $create_post_query = mysqli_query($connection, $query);  
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
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">DT Solutions</a>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">
              <span data-feather="file"></span>
              Add Blog
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="testimonial.php">
              <span data-feather="shopping-cart"></span>
              Add Testimonial
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="portfolio.php">
              <span data-feather="users"></span>
              Add Portfolio <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Portfolio</h1>
        
      </div>

      <form action="" method="post" enctype="multipart/form-data">    
        <div class="form-group">
          <label for="port_title">Port Title</label>
            <input type="text" class="form-control" name="port_title">
        </div>
        <div class="form-group">
          <label for="port_image">Port Image</label>
            <input type="file"  name="port_image">
        </div>
        <div class="form-group">
        <label for="port_category">Port Category </label> 
        <select name="port_category" id="">
             <option>Mobile/Web Development</option>
             <option >Branding & Design</option>
             <option >Digital Marketing</option>
         </select>
      </div>
        <div class="form-group">
          <label for="port_website">Port Website</label>
            <input type="text"  name="port_website">
        </div>
        <div class="form-group">
          <label for="port_client">Port Client</label>
            <input type="text"  name="port_client">
        </div>
        <div class="form-group">
          <label for="port_content">Port Content</label>
          <textarea class="form-control "name="port_content" id="" cols="30" rows="10">
          </textarea>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="Publish Post">
        </div>
    </form>
     

     
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
