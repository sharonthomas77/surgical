
@extends("themeuser") @section("content")
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
<h4><center>My Orders</center></h4>
<br>
<div class="container">
<div class="row ">

@foreach($orders as $item) 

<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br>
<img width="150" height="100" src="{{ URL ::asset('assets/project_img/'.$item->pimage) }}">
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<p class="card-text"><small class="text-muted"><h4>{{$item->pid}} </h4></small></p>
<h3>{{$item->pname}}</h3> 
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br>
<h5>₹ {{$item->price}}</h5>
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br>
<h5>{{$item->status}}
</h5>
</div>
<br><br>
<div>
<a href="/cancelorder/{{$item->pid}}/{{$item->userid}}">Cancel</a>
</div>
@endforeach

</div>

</div>


@endsection
