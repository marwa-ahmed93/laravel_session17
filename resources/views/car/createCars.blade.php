<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<form action="{{url('storeData')}}" method="post" enctype="multipart/form-data">
    @csrf
   <div class="container my-5">
     <input class="form-control my-2" type="text" name="name" placeholder="name">
    <input class="form-control my-2" type="text" name="color" placeholder="color">
    <input class="form-control my-2" type="number" name="price" placeholder="Price">
    <input class="form-control my-2" type="file" name="image" >
    <button class="btn btn-primary" type="submit">submit</button>
   </div>
</form>



</body>
</html>