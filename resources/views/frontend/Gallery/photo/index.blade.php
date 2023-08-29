@extends('layout.app')

@section('content')

   <!-- Gallery  -->
   <div class="container py-5">
    <h1 class="text-center mb-4">Photo Gallery</h1>
    
    <div class="row">
      <div class="col-6">
        <div class="card h-100">
          <img src="{{asset("assets/images/gallery/Photos/first.jpg")}}" class="card-img-top h-100" alt="Photo 1">
          <div class="card-body">
            <h5 class="card-title">Photo 1</h5>
            <p class="card-text">Description for Photo 1.</p>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card h-100">
          <img src="Photos/second.jpg" class="card-img-top h-100" alt="Photo 2">
          <div class="card-body">
            <h5 class="card-title">Photo 2</h5>
            <p class="card-text">Description for Photo 2.</p>
          </div>
        </div>
      </div>
      <!-- Add more photo cards here -->
    </div>
    <!-- Second row  -->
    <div class="row">
        <div class="col-6">
          <div class="card h-100">
            <img src="Photos/third.jpg" class="card-img-top h-100" alt="Photo 1">
            <div class="card-body">
              <h5 class="card-title">Photo 1</h5>
              <p class="card-text">Description for Photo 1.</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card h-100">
            <img src="Photos/fourth.jpg" class="card-img-top h-100" alt="Photo 2">
            <div class="card-body">
              <h5 class="card-title">Photo 2</h5>
              <p class="card-text">Description for Photo 2.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Third row -->
      <div class="row">
        <div class="col-6">
          <div class="card h-100">
            <img src="Photos/fifth.jpg" class="card-img-top h-100" alt="Photo 1">
            <div class="card-body">
              <h5 class="card-title">Photo 1</h5>
              <p class="card-text">Description for Photo 1.</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card h-100">
            <img src="Photos/sixth.jpg" class="card-img-top h-100" alt="Photo 2">
            <div class="card-body">
              <h5 class="card-title">Photo 2</h5>
              <p class="card-text">Description for Photo 2.</p>
            </div>
          </div>
        </div>
        
      </div>
      <!-- Fourth row -->
      <div class="row">
        <div class="col-6">
          <div class="card h-100">
            <img src="Photos/seventh.jpg" class="card-img-top h-100" alt="Photo 1">
            <div class="card-body">
              <h5 class="card-title">Photo 1</h5>
              <p class="card-text">Description for Photo 1.</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card h-100">
            <img src="Photos/eighth.jpg" class="card-img-top h-100" alt="Photo 2">
            <div class="card-body">
              <h5 class="card-title">Photo 2</h5>
              <p class="card-text">Description for Photo 2.</p>
            </div>
          </div>
        </div>
        
      </div>
  </div>


 
    
@endsection