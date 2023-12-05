<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

  <div class="container mt-5 px-5">

  <h1 class="text-capitalize">product information</h1>

    <form action="datainformtionproduct.php" method="POST" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-capitalize">name</label>
    <input type="text" placeholder="Enter product name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-capitalize">description</label>
    <textarea class="form-control" name="description" placeholder="Enter product description " ></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-capitalize">price</label>
    <input type="number" name="price" class="form-control" placeholder="Enter product price " id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-capitalize">discount</label>
    <input type="number" name="discount" class="form-control" placeholder="Enter product discount " id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-capitalize">image</label>
    <input type="file" name="image" class="form-control">
  </div>


  <div class="mb-3">
    
    <input type="submit" value="send" class="form-control bg-primary w-auto" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>