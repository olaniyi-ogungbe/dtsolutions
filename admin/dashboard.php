
<?php require_once '../include/db.php'; ?>
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
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">DT Solutions</a>
  
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
            <a class="nav-link active" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">
              <span data-feather="file"></span>
              Add Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testimonial.php">
              <span data-feather="shopping-cart"></span>
              Add Testimonial
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.php">
              <span data-feather="users"></span>
              Add Portfolio
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        
      </div>

     

      <h2>Blogs</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Blog Title</th>
              <th>Blog Image </th>
              <th>Blog Date </th>
              <th>Blog Category</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
                 $query = "SELECT * FROM posts";
                 $select_all_posts_query = mysqli_query($connection,$query);
                 while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                     $post_id = $row['post_id'];
                     $post_title = $row['post_title'];
                     $post_date = $row['post_date'];
                     $post_image = $row['post_image'];
                     $post_category = $row['post_category'];

                     echo "<tr>";
                     echo "<td> $post_id  </td>" ;
                     echo "<td> $post_title  </td>" ;
                     echo "<td> <img width='50px' height='50px' src='img/images/siteimages/<?php echo $post_image ?>' alt = 'img'> </td>" ;
                     echo "<td> $post_date  </td>" ;
                     echo "<td> $post_category </td>" ;
                     echo "<td> <a href='dashboard.php?cancel={$post_id}'> delete </a> </td>" ;
                     echo "</tr>";
                 }
                     
         ?>               
            
          </tbody>
        </table>
        <?php
          if(isset($_GET['cancel'])){
            $the_post_id = $_GET['cancel'];
          $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
          $delete_query = mysqli_query($connection,$query);
          }
        ?>
      </div>
      </div>
    </main>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      

     

      <h2>Portfolio</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th> Title</th>
              <th> Image </th>
              <th> Date </th>
              <th> Category</th>
              <th> Client</th>
              <th>Content</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
                $query = "SELECT * FROM port";
                $select_all_port_query = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_assoc($select_all_port_query)) {
                    $port_id = $row['port_id'];
                    $port_date = $row['port_date'];
                    $port_client  = $row['port_client'];
                    $port_title  = $row['port_title'];
                    $port_category = $row['port_category'];
                    $port_image  = $row['port_image'];;
                    $port_website = $row['port_website'];

                      echo "<tr>";
                     echo "<td> $port_id  </td>" ;
                     echo "<td> $port_title  </td>" ;
                     echo "<td> <img width='50px' height='50px' src='img/images/siteimages/<?php echo $port_image ?>' alt = 'img'></td>" ;
                     echo "<td> $port_date  </td>" ;
                     echo "<td> $port_category </td>" ;
                     echo "<td> $port_client  </td>" ;
                     echo "<td> $port_website  </td>" ; 
                     echo "<td> <a href='dashboard.php?remove={$port_id}'> delete </a> </td>" ;
                     echo "</tr>";
                 }
                     
         ?>             
            
          </tbody>
        </table>
        <?php
          if(isset($_GET['remove'])){
            $the_port_id = $_GET['remove'];
          $query = "DELETE FROM port WHERE port_id = {$the_port_id}";
          $delete_query = mysqli_query($connection,$query);
          }
        ?>
      </div>
    </main>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      

     

      <h2>Testimonial</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th> Author</th>
              <th> Company </th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
                 $query = "SELECT * FROM test";
                 $select_all_test_query = mysqli_query($connection,$query);
                 while ($row = mysqli_fetch_assoc($select_all_test_query)) {
                     $test_author = $row['test_author'];
                     $test_company = $row['test_company'];
                     $test_id = $row['test_id'];

                     echo "<tr>";
                     echo "<td> $test_id  </td>" ;
                     echo "<td> $test_author  </td>" ;
                     echo "<td> $test_company  </td>" ;
                     echo "<td> <a href='dashboard.php?delete={$test_id}'> delete </a> </td>" ;
                     echo "</tr>";
                 }
                     
         ?>               
          
            
          </tbody>
        </table>
        <?php
          if(isset($_GET['delete'])){
            $the_test_id = $_GET['delete'];
          $query = "DELETE FROM test WHERE test_id = {$the_test_id}";
          $delete_query = mysqli_query($connection,$query);
          }
        ?>
      </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
