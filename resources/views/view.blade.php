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
        <a class="navbar-brand btn btn-success" href="add">Add Blog</a>
        <a class="btn btn-danger text-white" href="/">Home</a>

    </div>
</nav>

<!-- Blog Content -->
<div class="container my-4 flex-grow-1">
    <!-- Blog Box -->

@foreach ($product as $product)


    <div class="row bg-dark text-light p-4 rounded mb-4 border border-danger">
        <div class="col-md-4">
            {{-- https://via.placeholder.com/150 --}}
            <img width="150" src="products/{{$product->image}}" alt=" Image not use" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
            <h2 class="text-danger">{{$product->title}}</h2>
            <p>{{$product->shortdec}}</p>
            <a href="{{url('product_detail',$product->id)}}" class="btn btn-danger btn-sm">Details</a>
            <a href="{{url('update_product',$product->id)}}" class="btn btn-warning btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                </svg>
            </a>
            <a href="{{url('delete_product',$product->id)}}" class="btn btn-danger btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                    <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z" />
                </svg>
            </a>
        </div>
    </div>

    @endforeach

    <!-- Add more blog boxes as needed -->
</div>

<!-- Footer -->
<footer class="bg-secondary text-danger text-center py-3 mt-auto">
    &copy; 2024 My Blog. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
