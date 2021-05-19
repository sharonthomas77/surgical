
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
    <a class="navbar-brand" href="/uh" style="font-size:larger; font-family:sans-serif; font-weight: 600;"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Home</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/userhome" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbspProducts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:larger; font-family:sans-serif;"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="womens.php" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbspMy Cart</a>
      </li>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/au" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbsp&nbsp&nbspAbout Us</a>
    </li>
    <!--<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="offers.php" style="font-size:larger; font-family:sans-serif;font-weight: 600;">Management</a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/contact" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbsp&nbsp&nbspContact</a>
      </li>
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
<form action="/destroy/{{$user->id}}" method="post">

            {{ csrf_field() }}
<h2><center>PRODUCT</center></h2>

 <table class="table table-borderless">
    
    <tr>
        <td><center>Product Name :</center></td>
        <td><input type="text" class="form-control" name="pname" value="{{ $user->pname}}" value="{{old('pname')}}">
        <span class="text-danger">@error('pname'){{$message}} @enderror  </span></td>

    </tr>
     <tr>
         <td><center>Price :</center></td>
         <td><input type="text" class="form-control" name="price" value="{{ $user->price}}" value="{{old('price')}}">
         <span class="text-danger">@error('price'){{$message}} @enderror  </span></td>

     </tr>
     <tr>
         <td><center>Description :</center></td>
         <td><input type="text" class="form-control" name="desc" value="{{ $user->desc}}" value="{{old('desc')}}">
         <span class="text-danger">@error('desc'){{$message}} @enderror  </span></td>

    </tr>
    
     <tr>
         <td><input type="hidden" name="id"  value="{{$user->id}}"/>
    </td>
         <td><button class="btn btn-success" type="submit">Delete</button></td>
     </tr>
 </table>
</form>

   
       

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>