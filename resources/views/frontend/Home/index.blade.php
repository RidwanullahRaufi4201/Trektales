@extends('layout.app')



@section('content')
          <!-- End of Navbar  -->     
      <!-- image slider -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset("assets/images/sliders/Slider_1.jpg")}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset("assets/images/sliders/Slider_1.jpg")}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset("assets/images/sliders/Slider_1.jpg")}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- End of Slider  -->


                                      <!-- Top Destination -->
   <!-- Top Destination Cards -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col pb-3" style="text-align: center;">
          <h1 >Top Destinations</h1>
        </div>
      </div>
      <div class="row">
        <!-- China Card -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="newone.avif" class="card-img-top" height="250px" alt="China">
            <div class="card-body">
              <h5 class="card-title">Explore China</h5>
              <p class="card-text">Experience the wonders of China's rich history and breathtaking landscapes.</p>
              
              <!-- Add original price and discounted price -->
              <p class="card-price"><span class="original-price">$2000</span> $1500</p>
              
              <!-- User feedback -->
              <div class="user-feedback">
                    <div class="rating">
                      <span class="star" data-rating="1">&#9733;</span>
                      <span class="star" data-rating="2">&#9733;</span>
                      <span class="star" data-rating="3">&#9733;</span>
                      <span class="star" data-rating="4">&#9733;</span>
                      <span class="star" data-rating="5">&#9733;</span>
                    </div>
              </div>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>
        
        <!-- Azad Kashmir Card -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="newtwo.jpg" class="card-img-top" height="250px" alt="China">
            <div class="card-body">
              <h5 class="card-title">Discover Azad Kashmir</h5>
              <p class="card-text">Uncover the natural beauty and serene landscapes of Azad Kashmir.</p>
              
              <!-- Add original price and discounted price -->
              <p class="card-price"><span class="original-price">$1200</span> $1000</p>
              
              <!-- User feedback -->
              <div class="user-feedback">
                    <div class="rating">
                      <span class="star" data-rating="1">&#9733;</span>
                      <span class="star" data-rating="2">&#9733;</span>
                      <span class="star" data-rating="3">&#9733;</span>
                      <span class="star" data-rating="4">&#9733;</span>
                      <span class="star" data-rating="5">&#9733;</span>
                    </div>
              </div>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Paris Card -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="newThree.jpg" class="card-img-top" height="250px" alt="China">
            <div class="card-body">
              <h5 class="card-title">Explore Paris</h5>
              <p class="card-text">Immerse yourself in the romantic charm and cultural treasures of Paris.</p>
              
              <!-- Add original price and discounted price -->
              <p class="card-price"><span class="original-price">$3000</span> $2500</p>
              
              <!-- User feedback -->
              <div class="user-feedback">
                    <div class="rating">
                      <span class="star" data-rating="1">&#9733;</span>
                      <span class="star" data-rating="2">&#9733;</span>
                      <span class="star" data-rating="3">&#9733;</span>
                      <span class="star" data-rating="4">&#9733;</span>
                      <span class="star" data-rating="5">&#9733;</span>
                    </div>
              </div>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Germany Card -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="newfour.jpg" class="card-img-top" height="250px" alt="China">
            <div class="card-body">
              <h5 class="card-title">Discover Germany</h5>
              <p class="card-text">Explore the historic cities and scenic landscapes of Germany.</p>
              
              <!-- Add original price and discounted price -->
              <p class="card-price"><span class="original-price">$3000</span> $2500</p>
              
              <!-- User feedback -->
              <div class="user-feedback">
                    <div class="rating">
                      <span class="star" data-rating="1">&#9733;</span>
                      <span class="star" data-rating="2">&#9733;</span>
                      <span class="star" data-rating="3">&#9733;</span>
                      <span class="star" data-rating="4">&#9733;</span>
                      <span class="star" data-rating="5">&#9733;</span>
                    </div>
              </div>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Russia Card -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="newfive.jpg" class="card-img-top" height="250px" alt="China">
            <div class="card-body">
              <h5 class="card-title">Journey through Russia</h5>
              <p class="card-text">Experience the vastness and cultural richness of Russia</p>
              
              <!-- Add original price and discounted price -->
              <p class="card-price"><span class="original-price">$5000</span> $4500</p>
              
              <!-- User feedback -->
              <div class="user-feedback">
                    <div class="rating">
                      <span class="star" data-rating="1">&#9733;</span>
                      <span class="star" data-rating="2">&#9733;</span>
                      <span class="star" data-rating="3">&#9733;</span>
                      <span class="star" data-rating="4">&#9733;</span>
                      <span class="star" data-rating="5">&#9733;</span>
                    </div>
              </div>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Afghanistan Card -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="newsix.png" class="card-img-top" height="250px" alt="China">
            <div class="card-body">
              <h5 class="card-title">Explore Afghanistan</h5>
              <p class="card-text">Discover the ancient history and diverse landscapes of Afghanistan.</p>
              
              <!-- Add original price and discounted price -->
              <p class="card-price"><span class="original-price">$2000</span> $1500</p>
              
              <!-- User feedback -->
              <div class="user-feedback">
                    <div class="rating">
                      <span class="star" data-rating="1">&#9733;</span>
                      <span class="star" data-rating="2">&#9733;</span>
                      <span class="star" data-rating="3">&#9733;</span>
                      <span class="star" data-rating="4">&#9733;</span>
                      <span class="star" data-rating="5">&#9733;</span>
                    </div>
              </div>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Other Cards ... -->
      </div>
    </div>
  </section>


  

<!-- FAQs Section -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-6 p-5" style="text-align: center;">
      <h1>FAQs</h1>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              How do I book a tour on your website?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Booking a tour is easy! Simply navigate to our "Tours" page, choose the tour you're interested in, select your preferred date and time, and follow the prompts to complete the booking process.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Is transportation included in the tour price?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Transportation details are provided in the tour description. Some tours include transportation, while others do not. Make sure to read the tour details carefully to know what's included.</div>
          </div>
        </div>
        <!-- Add unique IDs for each accordion item -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Are your tours guided?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Yes, all our tours are guided by knowledgeable and experienced guides who will provide you with interesting insights and information about the destination.</div>
          </div>
        </div>
        <!-- Add unique IDs for each accordion item -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
              How do I get in touch if I have questions about a tour?
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">You can reach our customer support team via email at essa.bscs4207@iiu.edu.pk or by calling our toll-free number +923317556877. We're here to assist you with any inquiries you may have.</div>
          </div>
        </div>
        <!-- Add unique IDs for each accordion item -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
              Are your tours accessible for people with mobility challenges?
            </button>
          </h2>
          <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">We strive to make our tours accessible to everyone. Please contact us in advance to discuss your specific needs, and we will do our best to accommodate you.</div>
          </div>
        </div>
        <!-- Add unique IDs for each accordion item -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
              What should I wear and bring for the tour?
            </button>
          </h2>
          <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Comfortable clothing and appropriate footwear are recommended for most tours. Depending on the tour, you might also want to bring sunscreen, a hat, a water bottle, and any necessary personal items. Specific recommendations will be provided in the tour description.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 p-5" style="text-align: center;">
      <h1>Nearby Attractions</h1>
    </div>
  </div>
</div>

<!-- End of FAQs Section -->


   
@endsection

 