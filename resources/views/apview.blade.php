<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United-Admin View</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light" style="background:rgb(255, 255, 255)" > 
    <div class="container-fluid">
    <img src="/images\a.jpg" height="75" alt="" ><br>
    <br>
    <a class="navbar-brand" href="/aindex" style="font-size:larger; font-family:sans-serif; font-weight: 600;"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Home</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <!-- <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/userhome" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbspProducts</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:larger; font-family:sans-serif;"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/userview" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbspEdit</a>
      </li>
    </li>
   <!-- <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/au" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbsp&nbsp&nbspAbout Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="offers.php" style="font-size:larger; font-family:sans-serif;font-weight: 600;">Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/contact" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbsp&nbsp&nbspContact</a>
      </li>-->
    </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/logout">Log Out</a>
            </li>
           
        </ul>
    
  </div>
</div>
</nav>

<body>

<div class="container">
<div class="row">
 <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ">
 <br><br>
 <table class="table">
 <tr>
     <td>Product ID</td>
     <td>Product Name</td>
     <td>Price</td>
     <td>Description</td>
     <td>Image</td>
     <td>&nbsp&nbsp&nbspAction</td>



 </tr>

  @foreach($user as $userf)
 <tr>
     <td>{{$userf->pid}}</td>
     <td>{{$userf->pname}}</td>
     <td>{{$userf->price}}</td>
     <td>{{$userf->desc}}</td>
     <td>{{$userf->pimage}}</td>
     <td><a class="btn btn-warning" href="/edit/{{$userf->id}} ">  Edit  </a></td>
     <td><a class="btn btn-danger" href="/delete/{{$userf->id}}">  Delete  </a></td>



 </tr>
 
 @endforeach
 </table>
 </div>
 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>