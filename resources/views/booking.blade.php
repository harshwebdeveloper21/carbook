
@extends('layout/app')
@section('title')
Car Details
@endsection
@section('content') 
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('assets/images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>
		

	   {{-- book Model --}}
	   <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
		  <div class="modal-content">
			<div class="container mt-5">
				<div class="row justify-content-center">
					<div class="col-md-9">
						<form>
							<h4 class="text-center">Booking For Your car</h4>
							<div class="mb-3">
								<label for="fullName" class="form-label">Full Name:</label>
								<input type="text" id="fullName" name="fullName" class="form-control" required>
							</div>
		
							<div class="mb-3">
								<label for="email" class="form-label">Email:</label>
								<input type="email" id="email" name="email" class="form-control" required>
							</div>
		
							<div class="mb-3">
								<label for="phoneNumber" class="form-label">Phone Number:</label>
								<input type="tel" id="phoneNumber" name="phoneNumber" class="form-control" required>
							</div>
		
							<div class="mb-3">
								<label for="pickupDate" class="form-label">Pickup Date:</label>
								<input type="date" id="pickupDate" name="pickupDate" class="form-control" required>
							</div>
		
							<div class="mb-3">
								<label for="pickupTime" class="form-label">Pickup Time:</label>
								<input type="time" id="pickupTime" name="pickupTime" class="form-control" required>
							</div>
		
							<div class="mb-3">
								<label for="pickupLocation" class="form-label">Pickup Location:</label>
								<input type="text" id="pickupLocation" name="pickupLocation" class="form-control" required>
							</div>
		
							<div class="mb-3">
								<label for="dropoffLocation" class="form-label">Drop-off Location:</label>
								<input type="text" id="dropoffLocation" name="dropoffLocation" class="form-control" required>
							</div>
		
							<button type="submit" class="btn btn-primary my-5	">book</button>
						</form>
					</div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
	   {{-- Book model End--}}


		<section class="ftco-section bg-light">
			
    	<div class="container">
			
    		<div class="row d-flex justify-content-between">
				<div class="col-md-4 my-4">
					<div class="input-group">
						<input type="text" class="form-control" id="search" name="search" placeholder="Search...">
						<button class="btn btn-primary" type="button" id="searchButton">Search</button>
					</div>
				</div>
				
			{{-- <div class="col-md-4 my-4">
				<label for="">Sort By </label>
				<input type="number" class="form-control" name="price_min" placeholder="Min Price" value="">
			</div> --}}
    		
			</div>
			{{-- <div class="row">
				@foreach ($cars as $car)
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/' . $car['image']) }}');">
							</div>
							
							<div class="text">
								<h2 class="mb-0"><a href="{{ url('carDetails') }}">{{ $car['name'] }}
								</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">{{ $car['description'] }}</span>
									<p class="price ml-auto">${{ $car['price'] }} <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1" data-toggle="modal" data-target=".bd-example-modal-lg">Book now</a> <a href="{{ url('carDetails') }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
				@endforeach --}}

   
    		</div>

    		<div class=" results" >
			</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>
    
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		$('#searchButton').on('click', function() {
			let query = $('#search').val();    

			if (query.length > 0) {
				$.ajax({
					url: '/search',
					method: 'GET',
					data: { search: query },
					success: function(response) {
						let output = '';
						
						if (response.cars.length > 0) {
							response.cars.forEach(car => {
								output += '<div class="col-md-4">';
								output += '<div class="car-wrap rounded ftco-animate">';
								output += `<div class="img rounded d-flex align-items-end" style="background-image: url('assets/images/${car.image}');">`;
								output += '</div>';
								output += '<div class="text">';
								output += `<h2 class="mb-0"><a href="/carDetails/${car.id}">${car.name}</a></h2>`;
								output += '<div class="d-flex mb-3">';
								output += '<span class="cat"></span>';
								output += `<p class="price ml-auto">${car.price} <span>/day</span></p>`;
								output += '</div>';
								output += '<p class="d-flex mb-0 d-block">';
								output += '<a href="#" class="btn btn-primary py-2 mr-1" data-toggle="modal" data-target=".bd-example-modal-lg">Book now</a>';
								output += `<a href="/carDetails/${car.id}" class="btn btn-secondary py-2 ml-1">Details</a>`;
								output += '</p>';
								output += '</div>';
								output += '</div>';
								output += '</div>';
							});
						} else {
							output = '<div>No results found</div>';
						}

						$('.results').html(output);
					},
					error: function() {
						$('.results').html('<div>An error occurred. Please try again later.</div>');
					}
				});
			} else {
				$('.results').html('<div>Please enter a search query.</div>');
			}
		});
	});

		
</script>