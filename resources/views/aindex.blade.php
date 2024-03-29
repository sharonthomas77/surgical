
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
   <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/vieworders" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbsp&nbspUpdate Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/viewall" style="font-size:larger; font-family:sans-serif;font-weight: 600;">View All</a>
      </li>
     <!--  <li class="nav-item">
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
<form action="/ap" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
<h2><center>ADD PRODUCT</center></h2>

 <table class="table table-borderless">
    <tr>
        <td>Product ID :</td>
        <td><input type="text" class="form-control" name="pid" value="{{old('pid')}}" required>
        <span class="text-danger">@error('pid'){{$message}} @enderror  </span></td>

    </tr>
    <tr>
        <td>Product Name :</td>
        <td><input type="text" class="form-control" name="pname" value="{{old('pname')}}" required>
        <span class="text-danger">@error('pname'){{$message}} @enderror  </span></td>

    </tr>
     <tr>
         <td>Price :</td>
         <td><input type="text" class="form-control" name="price" value="{{old('price')}}" required>
         <span class="text-danger">@error('price'){{$message}} @enderror  </span></td>

     </tr>
     <tr>
         <td>Description :</td>
         <td><input type="text" class="form-control" name="desc" value="{{old('desc')}}" required>
         <span class="text-danger">@error('desc'){{$message}} @enderror  </span></td>

    </tr>
    <tr>
    <td>Image :</td>
    <td><input type="file" name="pimage"class="form-control" required></td>
    </tr>
     <tr>
         <td></td>
         <td><button class="btn btn-success" type="submit">Add</button></td>
     </tr>
 </table>
</form>

   
       

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>