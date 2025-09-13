


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get and Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Contact US</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Saksham first php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

 <?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $desc=$_POST['desc'];

// Connecting to database

$servername="localhost";
$user="root";
$password="";
$database="contact";

$conn=mysqli_connect($servername,$user,$password,$database);

if(!$conn){
    die ("Sorry we failed to connect :" . mysqli_connect_error());
}else{
    echo ("Connection was succesfull <br>");
    $result="INSERT INTO `contactus` (`sno`, `name`, `email`, `concern`, `Date`) VALUES (1, '$name', '$email', '$desc', current_timestamp())";
     mysqli_query($conn,$result);
    if($result){
        echo   ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Submitted Succesfully!</strong> Your entry has been submitted successfully submitted.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
    }else{
        // echo "The record was not successfully submitted to database because of this error";

         echo   ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Submitted Succesfully!</strong> Erro! We are facing techinical issue and your entry was not submitted sucessfully !. We regret the inconvinience caused!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
        mysqli_error($conn);
    }
}
 }

 
?>
<h1>To Contact US</h1>
<h1>Please enter your email and password</h1>

<div class="container mt-5">

<form action="get_post.php" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
     <textarea class="form-control" name="desc" id="desc" cols="30" rows="10" ></textarea>
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>