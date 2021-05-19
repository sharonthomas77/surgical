
<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    
</head>
<nav class="navbar navbar-expand-lg navbar-light" style="background:rgb(255, 255, 255)" > 
    <div class="container-fluid">
    <img src="/images\a.jpg" height="75" alt="" ><br>
    <br>
    <a class="navbar-brand" href="/aindex" style="font-size:larger; font-family:sans-serif; font-weight: 600;"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add Product</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/adminpdt" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbspProducts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:larger; font-family:sans-serif;"></a>
      </li>
    </li>
    <!--<li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/au" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbsp&nbsp&nbspAbout Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/uindex" style="font-size:larger; font-family:sans-serif;font-weight: 600;">&nbsp&nbspMy Cart</a>
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


@foreach($prod as $prods)
<br>
<br>
<div class="container">


<div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <table class="table table-borderless">
                    <tr>
                        <td>
                         <div class="card" style="width: 18rem;">                         
                         <img src="{{ URL ::asset('assets/project_img/'.$prods->pimage) }}"class="card-img-top" alt="...">
                                 <div class="card-body">
                                <h4 class="card-title">{{$prods->pname}}</h4>
                                 <h6 class="card-title">{{$prods->desc}}</h6>
                                 <p class="card-text">{{$prods->price}}</p>
                                 <a href="/cartadd/{{$prods->pid}}" class="btn btn-primary">Add to Cart</a>
                                </div>
                          </div>
                        </td>
                    </tr>
                </table>
            </div>
</div>
</div>
                                @endforeach
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>