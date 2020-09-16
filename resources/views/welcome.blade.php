<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WSFood</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" >
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="#">
              <img src="{{ URL::to('/assets/images/fast-food.png')}}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
              WSFood
            </a>
        </nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Food</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Drinks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Snack</a>
            </li>
          </ul>
          <nav class="navbar navbar-light">
            <form class="form-inline">
              <button class="btn btn-outline-success" type="button">Masuk</button>
              <button class="btn btn-outline-success ml-3" type="button">Daftar</button>
            </form>
          </nav>
        </div>
    </nav>
    <!-- end navbar -->

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
    <div class="bg-view mt-5">
      <p class="text-md-center description"><span>our visitor</span><br> below is the opinion of our web visitors about the WSFood web</p>
    </div>
    <!-- end page our visitor -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    </body>
</html>
