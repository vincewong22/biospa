@extends('layouts.layout')
@section('content')


<div class="container">
    </br>
<h4>Choose Priority</h4>
    <div class="row">
  <div class="col-sm-4">

   <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="../../images/placeholder.svg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">美(Beauty)</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{url('/survey/create/beauty/'.$id)}}" class="btn btn-primary">Choose 美(Beauty)</a>
  </div>
</div>

  </div>
  <div class="col-sm-4">

       <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="../../images/placeholder.svg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">纖(Slimming)</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{url('/survey/create/slimming/'.$id)}}" class="btn btn-primary">Choose 纖(Slimming)</a>
  </div>

  </div>
      </div>
  <div class="col-sm-4">
       <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="../../images/placeholder.svg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">養(Health)</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{url('/survey/create/health/'.$id)}}" class="btn btn-primary">養(Health)</a>
  </div>
  </div>
</div>
</div>

</div>
@endsection
