<?php 

require_once '../include/db.php';                

if(isset($_GET['p_id'])){
    $the_post_id = $_GET['p_id'];
    
}
                    $query = "SELECT * FROM posts";
                 $select_post_by_id = mysqli_query($connection,$query);
                 while ($row = mysqli_fetch_assoc($select_post_by_id )) {
                     $post_id = $row['post_id'];
                     $post_title = $row['post_title'];
                     $post_date = $row['post_date'];
                     $post_image = $row['post_image'];
                     $post_category = $row['post_category'];
                     $post_content  = $_POST['post_content']; 
                     $post_tags  = $_POST['post_tags']; 
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
            <a class="nav-link active" href="blog.php">
              <span data-feather="file"></span>
              Add Blog <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ">
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
        <h1 class="h2"> Edit Blog</h1>
        
      </div>

     

      <form action="" method="post" enctype="multipart/form-data">    
        <div class="form-group">
          <label for="post_title">Post Title</label>
            <input value="<?php echo $post_title ?>" type="text" class="form-control" name="post_title">
        </div>
        <div class="form-group">
          <label for="post_image">Post Image</label>
            <input type="file"  name="post_image">
        </div>
        <div class="form-group">
          <label for="post_tags">Post Tags</label>
            <input value="<?php echo $post_tags ?>" type="text" class="form-control" name="post_tags">
        </div>
        <div class="form-group">
        <label for="post_category">Post Category </label> 
        <select name="post_category" id="" value="<?php echo $post_category ?>">
             <option>Mobile/Web Development</option>
             <option >Branding & Design</option>
             <option >Digital Marketing</option>
         </select>
      </div>
        <div class="form-group">
          <label for="post_content">Post Content</label>
          <textarea class="form-control "name="post_content" id="" cols="30" rows="10">
          <?php echo $post_content ?>
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
