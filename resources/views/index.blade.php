

@extends('layout/app')
@section('title')
homepage
@endsection
@section('content') 
<style>
  #autocomplete-list {
      border: 1px solid #ddd;
      max-height: 300px;
      overflow-y: auto;
      position: absolute;
      background: #fff;
      z-index: 1000;
  }
  #autocomplete-list div {
      padding: 10px;
      cursor: pointer;
  }
  #autocomplete-list div:hover {
      background: #eee;
  }
  /* .autocomplete-wrapper {
      position: relative;
  } */
</style>
<div class="hero-wrap ftco-degree-bg" style="   background-image: url('{{ asset('assets/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
      <div class="col-lg-8 ftco-animate">
        <div class="text w-100 text-center mb-md-5 pb-md-5">
          <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
          <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
          <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="ion-ios-play"></span>
            </div>
            <div class="heading-title ml-5">
              <span>Easy steps for renting a car</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

 <section class="ftco-section ftco-no-pt bg-light">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-12	featured-top">
        <div class="row no-gutters">
          <div class="col-md-4 d-flex align-items-center">
            <form action="#" class="request-form ftco-animate bg-primary py-3" id="FormDataCar">
              <h2>Make your trip</h2>
              <div class="mb-3">
								<label for="pickup-location" class="label">Pick-up location</label>
								<input type="text" id="pickup-location"  name="pickup_station" class="form-control pickup-location" placeholder="City, Airport, Station, etc">
								<ul class="bg-light suggestions-list suggestions"></ul>
							</div>
							<div class="mb-3">
								<label for="drop-off-location" class="label">Drop-off location</label>
								<input type="text" id="drop-off-location" name="drop_station" class="form-control drop-off-location" placeholder="City, Airport, Station, etc">
								<ul class=" bg-light suggestions-list suggestions"></ul>
							</div>
              <style>
                .suggestions-list li:hover {
                    color: black;
                    cursor: pointer;
                  }
                .suggestions-list li{
                  list-style-type: none;
                }
                .suggestions-list{
                  max-height: 150px;
                  overflow: scroll;
                  max-width: auto;
                  display: none;
                }
              </style>
              <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="" class="label">Pick-up date</label>
                  <input type="text" class="form-control" name="book_date" id="book_pick_date" placeholder="Date">
                </div>
                <div class="form-group ml-2">
                  <label for="" class="label">Drop-off date</label>
                  <input type="text" class="form-control" name="book_off" id="book_off_date" placeholder="Date">
                </div>
              </div>

              <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="time_pick" class="label">Pick-up Time</label>
                  <input type="text" class="form-control date_ttt " name="time_pick" id="time_pick" placeholder="Enter pick-up time">
                </div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
                    <script>
                  $(document).ready(function(){
                    $('.date_ttt').timepicker({
                      minuteStep: 1,
                      showSeconds: true,
                      showMeridian: true
                    });
                  });
                </script>
                <div class="form-group ml-2">
                  <label for="total-kilometer" class="label">Total Kilometers</label>
                  <input type="number" id="total-kilometer" name="total_kilometer" class="form-control" readonly placeholder="Total kilometers traveled">
                </div>
              </div>
                
              <div class="mb-3">
								<label for="drop-off-location" class="label">Mobile</label>
								<input type="number" id="mobile" name="mobile" class="form-control " minlength="10" maxlength="15"  placeholder="Enter Your Moblie">
								{{-- <ul class="suggestions-list suggestions"></ul> --}}
							</div>

              <div class="form-group">
                <input type="submit" value="Search A Car Now" class="btn btn-secondary py-2 px-2">
              </div>
            </form>
          </div>
        
          <div class="col-md-8 d-flex align-items-center">
            <div class="services-wrap rounded-right w-100">
              <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
              <div class="row d-flex mb-4">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                  <div class="services w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                    </div>
                  </div>      
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                  <div class="services w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Select the Best Deal</h3>
                    </div>
                  </div>      
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                  <div class="services w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                    </div>
                  </div>      
                </div>
              </div>
              <p><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-no-pt bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        <span class="subheading">What we offer</span>
        <h2 class="mb-2">Feeatured Vehicles</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="carousel-car owl-carousel">
          @foreach ($car as $car)

          <div class="item">

            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/' . $car['image']) }}');">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="#">{{$car['name']}}</a></h2>
                <div class="d-flex justify-content-between">
                  <div class="text-dark" >Description </div>
                  <div class="cat text-primary">{{ $car['description'] }}</div>
                </div>
                <div class="d-flex justify-content-between">
								<div  class="text-dark">Per km/ret</div>
								<div class="text-primary">${{ $car['price'] }}</div>

							</div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          @endforeach

          {{-- <div class="item">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-2.jpg') }}');">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Cheverolet</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div> --}}
          {{-- <div class="item">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-3.jpg') }}');">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Cheverolet</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div> --}}
          {{-- <div class="item">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-4.jpg') }}');">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Cheverolet</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>


  </div>
</section>

<section class="ftco-section ftco-about">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('assets/images/about.jpg') }}');">
      </div>
      <div class="col-md-6 wrap-about ftco-animate">
        <div class="heading-section heading-section-white pl-md-5">
          <span class="subheading">About us</span>
          <h2 class="mb-4">Welcome to Carbook</h2>

          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <p><a href="#" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Services</span>
        <h2 class="mb-3">Our Latest Services</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Wedding Ceremony</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">City Transfer</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Airport Transfer</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Whole City Tour</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-intro" style="   background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 heading-section heading-section-white ftco-animate">
        <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
        <a href="#" class="btn btn-primary btn-lg">Become A Driver</a>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Testimonial</span>
        <h2 class="mb-3">Happy Clients</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="   background-image: url('{{ asset('assets/images/person_1.jpg') }}');">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">Marketing Manager</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="   background-image: url('{{ asset('assets/images/person_2.jpg') }}');">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">Interface Designer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="   background-image: url('{{ asset('assets/images/person_3.jpg') }}');">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">UI Designer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="   background-image: url('{{ asset('assets/images/person_1.jpg') }}');">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">Web Developer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="   background-image: url('{{ asset('assets/images/person_2.jpg') }}');">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">System Analyst</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Blog</span>
        <h2>Recent Blog</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="blog-single.html" class="block-20" style="   background-image: url('{{ asset('assets/images/image_1.jpg') }}');">
          </a>
          <div class="text pt-4">
            <div class="meta mb-3">
              <div><a href="#">Oct. 29, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="blog-single.html" class="block-20" style="   background-image: url('{{ asset('assets/images/image_2.jpg') }}');">
          </a>
          <div class="text pt-4">
            <div class="meta mb-3">
              <div><a href="#">Oct. 29, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('assets/images/image_3.jpg') }}');">
          </a>
          <div class="text pt-4">
            <div class="meta mb-3">
              <div><a href="#">Oct. 29, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>	

<section class="ftco-counter ftco-section img bg-light" id="section-counter">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="60">0</strong>
            <span>Year <br>Experienced</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="1090">0</strong>
            <span>Total <br>Cars</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="2590">0</strong>
            <span>Happy <br>Customers</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text d-flex align-items-center">
            <strong class="number" data-number="67">0</strong>
            <span>Total <br>Branches</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>	

@endsection
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    

    <script>
      
     
      $(document).ready(function() {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });


      $('#FormDataCar').submit(function(event) {
            event.preventDefault(); 
            var formData = $(this).serialize();

            $.ajax({
              type: 'POST',
              url: '/carsearch',
              data: formData,
              dataType: 'json',
              success: function(response) {
                if(response.status === 'success') {
                    console.log(response.id);
                    var redirectUrl = "{{ url('car') }}";
                    window.location.href = redirectUrl;
                } else {
                    console.error('Error:', response.errors);
                }
              },
              error: function(xhr, status, error) {
                console.error('Error:', error);
              }
            });
          });
      });


      document.addEventListener('DOMContentLoaded', () => {
              const places = [
        { name: 'Mumbai', location: 'Maharashtra, India', parking: 'Available', kilometer: 0 },
        { name: 'Delhi', location: 'Delhi, India', parking: 'Available', kilometer: 1400 },
        { name: 'Bengaluru', location: 'Karnataka, India', parking: 'Available', kilometer: 980 },
        { name: 'Kolkata', location: 'West Bengal, India', parking: 'Available', kilometer: 2000 },
        { name: 'Chennai', location: 'Tamil Nadu, India', parking: 'Available', kilometer: 1330 },
        { name: 'Hyderabad', location: 'Telangana, India', parking: 'Available', kilometer: 700 },
        { name: 'Pune', location: 'Maharashtra, India', parking: 'Available', kilometer: 150 },
        { name: 'Ahmedabad', location: 'Gujarat, India', parking: 'Available', kilometer: 525 },
        { name: 'Jaipur', location: 'Rajasthan, India', parking: 'Available', kilometer: 1150 },
        { name: 'Surat', location: 'Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Lucknow', location: 'Uttar Pradesh, India', parking: 'Available', kilometer: 1250 },
        { name: 'Kanpur', location: 'Uttar Pradesh, India', parking: 'Available', kilometer: 1150 },
        { name: 'Nagpur', location: 'Maharashtra, India', parking: 'Available', kilometer: 800 },
        { name: 'Indore', location: 'Madhya Pradesh, India', parking: 'Available', kilometer: 600 },
        { name: 'Bhopal', location: 'Madhya Pradesh, India', parking: 'Available', kilometer: 700 },
        { name: 'Visakhapatnam', location: 'Andhra Pradesh, India', parking: 'Available', kilometer: 1140 },
        { name: 'Vadodara', location: 'Gujarat, India', parking: 'Available', kilometer: 450 },
        { name: 'Coimbatore', location: 'Tamil Nadu, India', parking: 'Available', kilometer: 1250 },
        { name: 'Chandigarh', location: 'Chandigarh, India', parking: 'Available', kilometer: 1500 },
        { name: 'Bhubaneswar', location: 'Odisha, India', parking: 'Available', kilometer: 1760 },
        { name: 'Guwahati', location: 'Assam, India', parking: 'Available', kilometer: 2200 },
        { name: 'Mangalore', location: 'Karnataka, India', parking: 'Available', kilometer: 900 },
        { name: 'Aurangabad', location: 'Maharashtra, India', parking: 'Available', kilometer: 330 },
        { name: 'Ranchi', location: 'Jharkhand, India', parking: 'Available', kilometer: 1500 },
        { name: 'Amritsar', location: 'Punjab, India', parking: 'Available', kilometer: 1900 },
        { name: 'Shimla', location: 'Himachal Pradesh, India', parking: 'Available', kilometer: 2000 },
        { name: 'Dehradun', location: 'Uttarakhand, India', parking: 'Available', kilometer: 1400 },
        { name: 'Agra', location: 'Uttar Pradesh, India', parking: 'Available', kilometer: 1200 },
        { name: 'Nashik', location: 'Maharashtra, India', parking: 'Available', kilometer: 200 },
        { name: 'Jodhpur', location: 'Rajasthan, India', parking: 'Available', kilometer: 1150 },
        { name: 'Udaipur', location: 'Rajasthan, India', parking: 'Available', kilometer: 1200 },
        { name: 'Rourkela', location: 'Odisha, India', parking: 'Available', kilometer: 1650 },
        { name: 'Gwalior', location: 'Madhya Pradesh, India', parking: 'Available', kilometer: 850 },
        { name: 'Siliguri', location: 'West Bengal, India', parking: 'Available', kilometer: 1950 },
        { name: 'Jamshedpur', location: 'Jharkhand, India', parking: 'Available', kilometer: 1600 },
        { name: 'Tiruchirappalli', location: 'Tamil Nadu, India', parking: 'Available', kilometer: 1250 },
        { name: 'Salem', location: 'Tamil Nadu, India', parking: 'Available', kilometer: 1200 },
        { name: 'Kakinada', location: 'Andhra Pradesh, India', parking: 'Available', kilometer: 1150 },
        { name: 'Dhanbad', location: 'Jharkhand, India', parking: 'Available', kilometer: 1550 },
        { name: 'Patna', location: 'Bihar, India', parking: 'Available', kilometer: 1650 },
        { name: 'Meerut', location: 'Uttar Pradesh, India', parking: 'Available', kilometer: 1350 },
        { name: 'Kota', location: 'Rajasthan, India', parking: 'Available', kilometer: 1150 },
        { name: 'Jabalpur', location: 'Madhya Pradesh, India', parking: 'Available', kilometer: 800 },
        { name: 'Raipur', location: 'Chhattisgarh, India', parking: 'Available', kilometer: 1250 },
        { name: 'Guntur', location: 'Andhra Pradesh, India', parking: 'Available', kilometer: 1100 },
        { name: 'Hubli', location: 'Karnataka, India', parking: 'Available', kilometer: 900 },
        { name: 'Kalyan', location: 'Maharashtra, India', parking: 'Available', kilometer: 100 },
        { name: 'Bhilai', location: 'Chhattisgarh, India', parking: 'Available', kilometer: 1300 },
        { name: 'Bilaspur', location: 'Chhattisgarh, India', parking: 'Available', kilometer: 1350 },
        { name: 'Navi Mumbai', location: 'Maharashtra, India', parking: 'Available', kilometer: 20 },
        { name: 'Bikaner', location: 'Rajasthan, India', parking: 'Available', kilometer: 1150 },
        { name: 'Jhansi', location: 'Uttar Pradesh, India', parking: 'Available', kilometer: 1200 },
        { name: 'Rajkot', location: 'Gujarat, India', parking: 'Available', kilometer: 450 },
        { name: 'Thane', location: 'Maharashtra, India', parking: 'Available', kilometer: 30 },
        { name: 'Aligarh', location: 'Uttar Pradesh, India', parking: 'Available', kilometer: 1250 },

        // Airports
        { name: 'Mumbai International Airport', location: 'Mumbai, Maharashtra, India', parking: 'Available', kilometer: 0 },
        { name: 'Indira Gandhi International Airport', location: 'Delhi, India', parking: 'Available', kilometer: 1400 },
        { name: 'Kempegowda International Airport', location: 'Bengaluru, Karnataka, India', parking: 'Available', kilometer: 980 },
        { name: 'Netaji Subhas Chandra Bose International Airport', location: 'Kolkata, West Bengal, India', parking: 'Available', kilometer: 2000 },
        { name: 'Chennai International Airport', location: 'Chennai, Tamil Nadu, India', parking: 'Available', kilometer: 1330 },
        { name: 'Rajiv Gandhi International Airport', location: 'Hyderabad, Telangana, India', parking: 'Available', kilometer: 700 },
        { name: 'Sardar Vallabhbhai Patel International Airport', location: 'Ahmedabad, Gujarat, India', parking: 'Available', kilometer: 525 },
        { name: 'Cochin International Airport', location: 'Kochi, Kerala, India', parking: 'Available', kilometer: 1280 },
        { name: 'Goa International Airport', location: 'Goa, India', parking: 'Available', kilometer: 1050 },
        { name: 'Pune Airport', location: 'Pune, Maharashtra, India', parking: 'Available', kilometer: 150 },

        // Notable City Spots
        { name: 'Gateway of India', location: 'Mumbai, Maharashtra, India', parking: 'Available', kilometer: 0 },
        { name: 'Qutub Minar', location: 'Delhi, India', parking: 'Available', kilometer: 1400 },
        { name: 'Bangalore Palace', location: 'Bengaluru, Karnataka, India', parking: 'Available', kilometer: 980 },
        { name: 'Victoria Memorial', location: 'Kolkata, West Bengal, India', parking: 'Available', kilometer: 2000 },
        { name: 'Marina Beach', location: 'Chennai, Tamil Nadu, India', parking: 'Available', kilometer: 1330 },
        { name: 'Charminar', location: 'Hyderabad, Telangana, India', parking: 'Available', kilometer: 700 },
        { name: 'Sabarmati Ashram', location: 'Ahmedabad, Gujarat, India', parking: 'Available', kilometer: 525 },
        { name: 'Fort Kochi', location: 'Kochi, Kerala, India', parking: 'Available', kilometer: 1280 },
        { name: 'Baga Beach', location: 'Goa, India', parking: 'Available', kilometer: 1050 },
        { name: 'Aga Khan Palace', location: 'Pune, Maharashtra, India', parking: 'Available', kilometer: 150 },

        // Additional Landmarks
        { name: 'Taj Mahal', location: 'Agra, Uttar Pradesh, India', parking: 'Available', kilometer: 1200 },
        { name: 'Red Fort', location: 'Delhi, India', parking: 'Available', kilometer: 1400 },
        { name: 'Hawa Mahal', location: 'Jaipur, Rajasthan, India', parking: 'Available', kilometer: 1150 },
        { name: 'Amer Fort', location: 'Jaipur, Rajasthan, India', parking: 'Available', kilometer: 1150 },
        { name: 'Siddhivinayak Temple', location: 'Mumbai, Maharashtra, India', parking: 'Available', kilometer: 0 },
        { name: 'India Gate', location: 'Delhi, India', parking: 'Available', kilometer: 1400 },
        { name: 'Jantar Mantar', location: 'Jaipur, Rajasthan, India', parking: 'Available', kilometer: 1150 },
        { name: 'Meenakshi Temple', location: 'Madurai, Tamil Nadu, India', parking: 'Available', kilometer: 2200 },
        { name: 'Ajanta Caves', location: 'Aurangabad, Maharashtra, India', parking: 'Available', kilometer: 330 },
        { name: 'City Light', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Adajan', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Udhna', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Piplod', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Vesu', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Gopi Talav', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Magdalla', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Rander', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Surat Textile Market', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Ghod Dod Road', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Sarthana', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Kapal', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 },
        { name: 'Katargam', location: 'Surat, Gujarat, India', parking: 'Available', kilometer: 290 }
        ];

            const inputs = document.getElementsByClassName('pickup-location');
            const dropOffInputs = document.getElementsByClassName('drop-off-location');
            const suggestionsLists = document.getElementsByClassName('suggestions');

            function handleInput(event) {
              const input = event.target;
              const suggestionsList = input.nextElementSibling;
              const query = input.value.toLowerCase();
              
              suggestionsList.innerHTML = ''; 

              if (query.length > 0) {
                const filteredPlaces = places.filter(place => 
                  place.name.toLowerCase().includes(query) || 
                  place.location.toLowerCase().includes(query)
                );

                if (filteredPlaces.length > 0) {
                  suggestionsList.style.display = 'block';
                  filteredPlaces.forEach(place => {
                    const listItem = document.createElement('li');
                    listItem.textContent = `${place.name}, ${place.location}`;
                    listItem.addEventListener('click', () => {
                      input.value = listItem.textContent;
                      suggestionsList.style.display = 'none'; 
                      calculateTotalKilometers();
                    });
                    suggestionsList.appendChild(listItem);
                  });
                } else {
                  suggestionsList.style.display = 'none';
                }
              } else {
                suggestionsList.style.display = 'none';
              }
            }

            Array.from(inputs).forEach(input => {
              input.addEventListener('keyup', handleInput);
            });

            Array.from(dropOffInputs).forEach(input => {
              input.addEventListener('keyup', handleInput);
            });

            document.addEventListener('click', (event) => {
              
              Array.from(suggestionsLists).forEach(suggestionsList => {
                if (!suggestionsList.contains(event.target) && !event.target.classList.contains('pickup-location') && !event.target.classList.contains('drop-off-location')) {
                  suggestionsList.style.display = 'none';
                }
              });
            });

            function findDistanceByName(name) {
              const location = places.find(loc => (loc.name + ', ' + loc.location).toLowerCase() === name.toLowerCase());
              return location ? location.kilometer : null;
            }

            function calculateTotalKilometers() {
              const pickupLocation = document.querySelector('#pickup-location').value.trim();
              const dropOffLocation = document.querySelector('#drop-off-location').value.trim();

              const pickupDistance = findDistanceByName(pickupLocation);
              const dropOffDistance = findDistanceByName(dropOffLocation);

              if (pickupDistance !== null && dropOffDistance !== null) {
                const totalKilometers = Math.abs(dropOffDistance - pickupDistance);
                document.querySelector('#total-kilometer').value = totalKilometers;
              } else {
                document.querySelector('#total-kilometer').value = 'Location not found';
              }
            }

            document.querySelector('#pickup-location').addEventListener('change', calculateTotalKilometers);
            document.querySelector('#drop-off-location').addEventListener('change', calculateTotalKilometers);

      });
    </script>
















