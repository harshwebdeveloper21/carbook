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

<style>
            .profile {
          display: flex;
          align-items: center;
          cursor: pointer;
      }

      .profile .user {
          flex: 1;
        position: relative;
        color: white;
      }

      .profile .user h3 {
          margin: 0;
          font-size: 18px;
          color: #333;
      }

      .profile .user p {
          margin: 0;
          font-size: 14px;
          color: #666;
      }

      .profile .img-box {
          width: 50px;
          height: 50px;
          border-radius: 50%;
          overflow: hidden;
          margin-left: 10px;
      }

      .profile .img-box img {
          width: 100%;
          height: auto;
      }


      .menu {
            display: none; 
            position: absolute; 
            margin-top: 76px;
            margin-left: 30%; 
            background-color: white; 
            color:black; 
            width: 13%;
            padding: 20px;
        }

      .menu.active {
          display: block; 
      }

      .menu ul {
          list-style-type: none;
          padding: 0;
      }

      .menu ul li {
          margin-bottom: 10px;
      }

      .menu ul li a {
          text-decoration: none;
          color: #333;
          font-size: 16px;
          display: flex;
          align-items: center;
      }

      .menu ul li a i {
          margin-right: 10px;
          font-size: 18px;
      }

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css" rel="stylesheet">

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
    
          @if(session('name') && session('email'))
          <div class="profile">
           
            <div class="img-box">
                <img src="https://i.postimg.cc/BvNYhMHS/user-img.jpg" alt="some user image">
            </div>
            <div class="user">
                <h3 class="text-warning">{{ session('name', 'Katherine Cooper') }}</h3>
                <p class="text-warning">{{ session('email', '@probablykat66') }}</p>
            </div>
            @else
            <li class="nav-item"><a href="{{url('login')}}" class="nav-link">Login</a></li>     
          @endif

        </div>
        <div class="menu">
            <ul>
               <li class="profile2"><a href="#"><i class="bi bi-person"></i>&nbsp;Profile</a></li>
              {{-- <li class="profile2"><a href="#"><i class="bi bi-envelope"></i>&nbsp;Inbox</a></li> --}}
              <li class="profile2"><a href="#"><i class="bi bi-gear"></i>&nbsp;Settings</a></li>
              <li class="profile2"><a href="#"><i class="bi bi-question-circle"></i>&nbsp;Help</a></li>
              <li class="profile2"><a href="{{url('logout')}}"><i class="bi bi-box-arrow-right"></i>&nbsp;Sign Out</a></li>
            </ul>
        </div>
        </ul>
      </div>
    </div>
  </nav>
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          let profile = document.querySelector('.profile');
          let menu = document.querySelector('.menu');

          profile.onclick = function() {
              menu.classList.toggle('active');
          };
      });
  </script>
<!-- END nav -->