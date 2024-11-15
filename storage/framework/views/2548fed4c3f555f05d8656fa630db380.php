<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .ss{
        height: 400px;
        width:600px ;
        border-radius: 12px;
        margin-left: 150px;
    }
</style>
</head>
<body class="bg-dark text-light d-flex flex-column min-vh-100">

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-secondary py-3">
    <div class="container">
        <a class="navbar-brand btn btn-danger  " href="<?php echo e(url('view')); ?>">back</a>
        <a class="btn btn-success text-white" href="/">Home</a>

        </div>
</nav>



  <!-- Blog Detail Content -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="blog-title">Title: <?php echo e($data->title); ?></h1>
      </div>
      <div class="col-md-8 mx-auto content">
        <img class="ss" src="/products/<?php echo e($data->image); ?>" alt=" Image not use" alt="Blog Image" />
          <p><h3 class="text-danger">Discription :</h3> <?php echo e($data->dec); ?></p>
        <p><h3 class="text-info">Author Name :</h3> <i class="h5"><?php echo e($data->author); ?></i></p>
      </div>
    </div>
  </div>





<!-- Footer -->
<footer class="bg-secondary text-danger text-center py-3 mt-auto">
    &copy; 2024 My Blog. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\laravel 11 project\fileDisplay\resources\views/product_detail.blade.php ENDPATH**/ ?>