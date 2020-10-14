@extends('layout.main')

@section('title', 'WSFood')

@section('container')
<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-light font-weight-bold mt-5">Fluid jumbotron</h1>
    <p class="lead text-light" id="write-text"></p>
  </div>
</div>
<!-- end jumbotron -->

<!-- description wsfood -->
<div class="bg-view">
  <p class="text-md-center description">wsfood is a web about various foods, <br> drinks and snacks, with the addition of this website can make it easier for us to find food</p>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <button class="btn btn-primary">Centered button</button>
      </div>
    </div>
  </div>
</div>
<!-- end description -->

<!-- card view -->
<div class="card-deck card-view">
  <div class="card">
    <img src="{{ URL::to('/assets/images/Chicken_noodle_soup.jpg')}}" class="card-img-top h-50" alt="jumbotron-image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="{{ URL::to('/assets/images/fried-chicken.jpeg')}}" class="card-img-top h-50" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="{{ URL::to('/assets/images/high-angle.jpg')}}" class="card-img-top h-50" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<div class="card-deck mt-3">
  <div class="card">
    <img src="{{ URL::to('/assets/images/cocktail.jpg')}}" class="card-img-top h-50" alt="jumbotron-image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="{{ URL::to('/assets/images/pineaplle.jpg')}}" class="card-img-top h-50" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="{{ URL::to('/assets/images/pink_shirley.jpg')}}" class="card-img-top h-50" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<div class="card-deck mt-3">
  <div class="card">
    <img src="{{ URL::to('/assets/images/maggi.jpg')}}" class="card-img-top h-50" alt="jumbotron-image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="{{ URL::to('/assets/images/snack-cheese.jpg')}}" class="card-img-top h-50" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="{{ URL::to('/assets/images/snack-mix.jpg')}}" class="card-img-top h-50" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<!-- end card -->

<!-- page our visitor -->
<p class="text-md-center description"><span>our visitor</span><br> below is the opinion of our web visitors about the WSFood web</p>
<div class="container px-lg-5">
  <div class="row mx-lg-n5">
    <div class="col py-3 px-lg-5 pkiri">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
    <div class="col py-3 px-lg-5 pkanan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
  </div>
  <div class="row mx-lg-n5">
    <div class="col py-3 px-lg-5"><span class="font-weight-bolder">Name :</span> Dimas Pratama</div>
    <div class="col py-3 px-lg-5"><span class="font-weight-bolder">Name :</span> Purwadinata</div>
  </div>
</div>
<!-- end page our visitor -->
@endsection