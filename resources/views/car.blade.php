
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

							@if(session('searched_car'))
							<div class="credit-card-form">
								<h2>PAYMENT</h2>
								<img class="Image1" src="https://i.ibb.co/hgJ7z3J/6375aad33dbabc9c424b5713-card-mockup-01.png" alt="6375aad33dbabc9c424b5713-card-mockup-01" border="0"></a>
									<form  id="payment-form">
										<div class="form-group">
											<label for="card-number">Card Number</label>
											 <div id="card-number"></div>
												<div id="card-expiry"></div>
												<div id="card-cvc"></div>
											{{-- <input type="text" name="card-number" id="card-number" placeholder="Card number"> --}}
										</div>
										{{-- <div class="form-group">
											<label for="card-holder">Card Holder</label>
											<input type="text" id="card-holder" placeholder="Card holder's name">
										</div> --}}
										{{-- <div class="form-row d-flex justify-content-between">
											<div class="form-group form-column">
											<label for="expiry-date">Expiry Date</label>
											<input type="text" id="card-expiry" name="expiry-date" placeholder="MM/YY">
											</div>
											<div class="form-group form-column">
											<label for="cvv">CVV</label>
											<input type="text" id="card-cvc"  name="cvv" placeholder="CVV">
											</div>
										</div> --}}
										<button type="submit" class="click-button" id="payprice" >PAY NOW - $(TOTAL)</button>
									</form>
							  </div>
							<style>
								@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Montserrat:wght@600&display=swap');

									*,
									*::before,
									*::after {
									margin: 0;
									padding: 0;
									box-sizing: border-box;
									}

									.modal-content{
										width: 550px;
										margin-left: 200px;
									}
									body {
									background-color: #686868;
									align-content: center;
									text-align: center;
									}

									.credit-card-form {
									/* margin-top:4%; */
									/* margin-left: 35%; */
									/* max-width: 400px; */
									padding: 1em;
									border-radius: 10px;
									box-shadow: 0px 6px 10px rgba(255, 255, 255, 0.1);
									font-family: 'Montserrat', sans-serif;
									background-color: #dbdbdb;
									text-align: center;
									color: #424242;
									/* align-content: center; */
									}

									.credit-card-form h2 {
									margin-bottom: 10%;
									font-size: 24px;
									}

									.credit-card-form .form-group {
									margin-bottom: 15px;

									}

									.credit-card-form label {
									font-weight: bold;
									display: block;
									margin-bottom: 5px;
									color: #777;
									}

									.credit-card-form input[type="text"],
									.credit-card-form select {
									width: 100%;
									padding: 12px;
									border: 1px solid #ddd;
									border-radius: 1rem;
									font-size: 16px;
										font-family: 'Montserrat', sans-serif;
									}

									.credit-card-form .form-row {
									display: flex;
									}


									.credit-card-form button[type="submit"] {
									width: 100%;
									padding: 14px;
									background-color: #585858;
									color: #fff;
									border: none;
									border-radius: 1rem;
									cursor: pointer;
									font-size: 16px;
									transition: background-color 0.3s ease;
									font-family: 'Montserrat', sans-serif;
									}

									.credit-card-form button[type="submit"]:hover {
									background-color: #808080;
									color: #424242;
									font-family: 'Montserrat', sans-serif;
									box-shadow: 0px 6px 10px rgba(255, 255, 255, 0.1);
									}

									.credit-card-form button[type="submit"]:focus {
									outline: none;
									font-family: 'Montserrat', sans-serif;
									}

									p {
									color: white;
									margin-top: 6%;
									font-family: 'Montserrat', sans-serif;
									text-align: center;
									margin-bottom: 45px;
									font-size: 70%;
									text-shadow: 0 0 5px #cacaca; 
									}

									.Image1 {
									margin-top: 0;
									width: 220px;
									}
									.h2 {
									margin: 0px;
									}
							</style>
							
						@else			   
									<div class="align-items-center">
											<form action="#" class="request-form  bg-primary py-3 mb-0" id="FormDataCar">
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
										<script>

							$('#FormDataCar').submit(function(event) {
										event.preventDefault(); 
										var formData = $(this).serialize();



										$.ajaxSetup({
												headers: {
													'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
												}
											});

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
							@endif
						
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
						<input type="text" class="form-control search" id="search" name="search" placeholder="Search...">
						<button class="btn btn-primary" type="button" id="searchButton">Search</button>
					</div>
				</div>
				
			{{-- <div class="col-md-4 my-4">
				<label for="">Sort By </label>
				<input type="number" class="form-control" name="price_min" placeholder="Min Price" value="">
			</div> --}}
    		
			</div>
			{{-- <div class="row results" >
			</div> --}}
			<div class="row results">
				@foreach ($cars as $car)

					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/' . $car['image']) }}');">
								
							</div>
							<div class="text-center	mt-3">
								@if(session('searched_car'))
								<h3 class="price ml-auto text-primary">${{ $car['price'] * session('searched_car')['total_kilometer']}}<h3></h3></h3>
								@endif
							</div>
							<div class="text">
								<h2><a href="{{ url('carDetails') }}">{{ $car['name'] }}
								</a></h2>
							<div class="d-flex justify-content-between">
								<div class="text-dark" >Description :</div>
								<div class="cat text-primary">{{ $car['description'] }}</div>
							</div>
							@if(session('searched_car'))
							<div class="d-flex justify-content-between">
								<div  class="text-dark">Included Km</div>
								<div class="text-primary">{{session('searched_car')['total_kilometer']}}</div>
							</div>
							@endif
							<div class="d-flex justify-content-between">
								<div  class="text-dark">Per km/ret</div>
								<div class="text-primary">${{ $car['price'] }}</div>

							</div>
						<div class="d-flex justify-content-between">
							<div>
						</div>
						
							
						</div>

						@if(session('searched_car'))
							<p class="d-flex mb-0 d-block mt-3"><a href="#"  data-price="{{ $car['price'] * session('searched_car')['total_kilometer']}}" id="booknow" class="btn btn-primary py-2 mr-1 booknow" data-toggle="modal" data-target=".bd-example-modal-lg">Pay now</a> 
							@else
							<p class="d-flex mb-0 d-block mt-3">
								
								{{-- <a href="{{ url('/') }}" class="btn btn-primary py-2 ml-1">Book now</a>  --}}
								<a href="" class="btn btn-primary py-2 ml-1" data-toggle="modal" data-target=".bd-example-modal-lg">Book now</a> 

							@endif		
							<a href="{{ url('carDetails/' . $car['id']) }}" class="btn btn-secondary py-2 ml-1">Details</a>
							</div>
						</div>
					</div>
				@endforeach

    			


			{{-- 
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-2.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Subaru</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-3.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Cheverolet</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>

    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-4.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Cheverolet</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-5.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Subaru</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-6.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Cheverolet</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>

    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-7.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Cheverolet</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-8.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Subaru</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-9.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Cheverolet</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>

    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-10.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Cheverolet</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-11.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Subaru</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('assets/images/car-12.jpg') }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Cheverolet</span>
	    						<p class="price ml-auto">$500 <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div> --}}


    		</div>
			<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						{{ $cars->links('pagination::bootstrap-5') }} 
					</div>
				</div>
			</div>
    		{{-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href=" ">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> --}}
    	</div>
    </section>
    
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
	
	$(document).ready(function() {
		$('.search').on('keyup', function() {
			let query = $('#search').val();    

			if (query.length > 0) {
				$.ajax({
					url: '/search',
					method: 'get',
					data: { search: query },
					success: function(response) {
						let output = '';
						if (response.cars.length > 0) {
							$('.results').empty();
							response.cars.forEach(car => {
								output += '<div class="col-md-4">';
                            output += '<div class="car-wrap rounded">';
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
							output = '<div class="text-center" >No results found</div>';
						}

						$('.results').html(output);
					},
					error: function() {
						$('.results').html('<div class="text-center">An error occurred. Please try again later.</div>');
					}
				});
			} else {
				$('.results').html('<div class="text-center">Please enter a search query.</div>');
			}
		});
	});

	$(document).ready(function(){
			$(document).on('click', '.booknow', function(e){
				e.preventDefault();
				var Price = $(this).data('price');
				$('#payprice').html('Pay Now $' + Price);

				
				var stripe = Stripe('{{ env('STRIPE_KEY') }}');
				var elements = stripe.elements();

				var style = {
					base: {
						fontSize: '16px',
						color: '#32325d',
					},
				};

				var cardNumber = elements.create('cardNumber', {style: style});
				var cardExpiry = elements.create('cardExpiry', {style: style});
				var cardCvc = elements.create('cardCvc', {style: style});

				if (document.getElementById('card-number') && document.getElementById('card-expiry') && document.getElementById('card-cvc')) {
					cardNumber.mount('#card-number');
					cardExpiry.mount('#card-expiry');
					cardCvc.mount('#card-cvc');
				} else {
					console.error('One or more Stripe element containers are missing.');
				}


				var form = document.getElementById('payment-form');
					form.append(Price);
				if (form) {
					form.addEventListener('submit', function(event) {
						event.preventDefault();

						stripe.createToken(cardNumber).then(function(result) {
							if (result.error) {
								console.error(result.error.message);
							} else {
								submitFormWithAjax(result.token);
							}
						});
					});
				}

					function submitFormWithAjax(token) {
					var form = document.getElementById('payment-form');
					var formData = new FormData(form);
					formData.append('payprice', Price);
					formData.append('stripeToken', token.id);

					Swal.fire({
							title: 'Processing Payment',
							text: 'Please wait while we process your payment...',
							icon: 'info',
							allowOutsideClick: false,
							didOpen: () => {
								Swal.showLoading();
							}
						});
				
					// var data = {};
					// formData.forEach((value, key) => {
					// 	data[key] = value;
					// });

					$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.ajax({
					url: '{{ url("payment") }}',
					type: 'POST',
					data: formData,
					processData: false, 
					contentType: false,
					success: function(response) {
						if (response.success) {

							console.log('Payment successful:', response);
							Swal.fire({
							title: 'Payment Successful!',
									text: response.message,
									icon: 'success',
									confirmButtonText: 'OK'
								});
								var redirectUrl = "{{ url('/') }}";
                    			window.location.href = redirectUrl;
						} else {
							console.error('Payment failed:', response.error);
							Swal.fire({
								title: 'Payment Failed',
								text: response.error,
								icon: 'error',
								confirmButtonText: 'Try Again'
							});
						}
					},
					error: function(xhr, status, error) {
						Swal.fire({
							title: 'AJAX Error',
							text: error,
							icon: 'error',
							confirmButtonText: 'Try Again'
						});
					}
				});

				}
			});
	});

	

</script>
	
	

