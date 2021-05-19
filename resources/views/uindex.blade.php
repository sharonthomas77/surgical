
@extends("themeuser") @section("content")
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
<title>United-Products</title>
    <style>

      .card-columns {
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
  text-align: center;
  background-color: #f1f1f1;
    column-count: 2;
    width: 65rem;

}

</style>







<div class="container">
<div class="row ">
<div  class="col col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
</div>
<div  class="col col-12 col-sm-11 col-md-11 col-lg-11 col-xl-11 col-xxl-11">

 @foreach($prod as $prods)

 <form action="/add_to_cart" method="post">
      {{csrf_field()}}
      <input type="hidden" name="pid" value= "{{ $prods->pid }}">


      <br>
         <div class="card-columns">
<img  height="230" width="150" src="{{ URL ::asset('assets/project_img/'.$prods->pimage) }}" class="card-img-top" alt="...">
<p class="card-text"><small class="text-muted"><h6>{{$prods->pid}} </h6></small></p>
    <h5 class="card-title">{{$prods->pname}}</h5>
    <p class="card-text">{{$prods->desc}} </p>
    <p class="card-text"><small class="text-muted"> <h5> ₹ {{$prods->price}} </h5></small></p>
    <button class="btn btn-primary" type="submit">Add to Cart</button>
    </div> 
	</form>
            @endforeach

			
            <br>
         
         </div> 
       </div>
</div>
@endsection
