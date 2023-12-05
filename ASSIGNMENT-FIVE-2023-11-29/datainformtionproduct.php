<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(htmlspecialchars(htmlentities($_POST["name"])));
    $description = trim(htmlspecialchars(htmlentities($_POST["description"])));
    $price = trim(htmlspecialchars(htmlentities($_POST["price"])));
    $discount = trim(htmlspecialchars(htmlentities($_POST["discount"])));
    $image = $_FILES['image'];
    $f_name = $image["name"];
    $f_tmp = $image["tmp_name"];
    $f_error = $image["error"];
  
    if($f_name != '') {

        $ext = pathinfo($f_name);
        $original_name = $ext['filename'];
        $original_ext = $ext['extension'];
        $allowed = array("png" , "jpg" , "jpeg","gif");
        if(in_array($original_ext , $allowed)) {
            if($f_error === 0 ) {
                $new_name = uniqid("" , true).".".$original_ext ;
                $destnotion = "images/".$new_name ;
                move_uploaded_file($f_tmp,$destnotion);

            }else {
                $error = "your have an error";
            }


        }else {
            $error = "your file not allowed" ;
        }

    }else {
        $error = "please choose image" ;
    }
}

?>

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
  <div class="container mx-auto">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">Discription</th>
      <th scope="col">price</th>
      <th scope="col">discount</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $name ; ?></td>
      <td><?php echo $description ; ?></td>
      <td><?php echo $price ; ?></td>
      <td><?php echo $discount ; ?></td>
      <td><div><img style="width: 100px;" src="<?php echo $destnotion ; ?>" /></div></td>
      
    </tr>
   
  </tbody>
</table>


  </div>


  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>