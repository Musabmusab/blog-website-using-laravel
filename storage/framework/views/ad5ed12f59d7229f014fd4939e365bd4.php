<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light d-flex flex-column min-vh-100">

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-secondary py-3">
    <div class="container">

        <a class="btn btn-success text-white" href="<?php echo e(url('view')); ?>">Back</a>
        <a class="btn btn-danger text-white" href="/">Home</a>
    </div>

</nav>

<div class="container d-flex justify-content-center align-items-center my-2  ">
    <div class="card bg-secondary p-4 w-100" style="max-width: 500px;">
        <h2 class="text-center text-white mb-4">Update Blog</h2>
        <form action="<?php echo e(url('edit_pro',$data->id)); ?>" method="post"  enctype="multipart/form-data" >
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label  class="form-label text-white">Title</label>
                <input type="text" name="title" value="<?php echo e($data->title); ?>" class="form-control bg-dark text-white border-danger" >
            </div>
            <div class="mb-3">
                <label  class="form-label text-white">Short Description</label>
                <input type="text" name="shortdec" value="<?php echo e($data->shortdec); ?>" class="form-control bg-dark text-white border-danger" >
            </div>
            <div class="mb-3">
                <label class="form-label text-white">Description</label>
                <textarea name="dec"  class="form-control bg-dark text-white border-danger" ><?php echo e($data->dec); ?></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label text-white">Author</label>
                <input type="text" name="author" value="<?php echo e($data->author); ?>" class="form-control bg-dark text-white border-danger">
            </div>
            <div class="mb-3">
                <label class="form-label text-white">Select image</label>
                <input type="file" name="file"  class="form-control bg-dark text-white border-danger" >
            </div>
            <div class="mb-3">
                <label class="form-label text-white">Current image</label><br>
               <center><img width="150" src="/products/<?php echo e($data->image); ?>" alt=" Image not use" class="img-fluid rounded"></center>
            </div>



            <button type="submit" class="btn btn-info w-100">Update</button>
        </form>
    </div>
</div>



<!-- Footer -->
<footer class="bg-secondary text-white text-center py-3 mt-auto">
    &copy; 2024 My Blog. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\laravel 11 project\Blog website\resources\views/update.blade.php ENDPATH**/ ?>