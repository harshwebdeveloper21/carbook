<?php
// Example URL
$url = URL::current(); // This should return the current URL

// Parse the URL to get the path
$parsed_url = parse_url($url);
$path = isset($parsed_url['path']) ? $parsed_url['path'] : '';

// Split the path into segments
$segments = explode('/', trim($path, '/'));

// Get the last segment
$last_segment = end($segments);

echo $last_segment;
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ $url === url('/') ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item @if($last_segment=='car') active @endif"><a href="{{url('car')}}" class="nav-link">Cars</a></li>
          <li class="nav-item @if($last_segment=='price') active @endif"><a href="{{url('price')}}" class="nav-link">Pricing</a></li>
          <li class="nav-item @if($last_segment=='about') active @endif"><a href="{{url('about')}}" class="nav-link">About</a></li>
          <li class="nav-item @if($last_segment=='services') active @endif"><a href="{{url('services')}}" class="nav-link">Services</a></li>
          {{-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> --}}
          <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
          <li class="nav-item btn-primary"><a href="{{url('logout')}}" class="nav-link">Logout</a></li>

        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->