<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

                * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
                }

                section {
                position: relative;
                min-height: 100vh;
                background-color: #1d1d1b;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 20px;
                }

                section .container {
                position: relative;
                width: 800px;
                height: 500px;
                background: #fff;
                box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                }

                section .container .user {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                }

                section .container .user .imgBx {
                position: relative;
                width: 50%;
                height: 100%;
                background: #ff0;
                transition: 0.5s;
                }

                section .container .user .imgBx img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                }

                section .container .user .formBx {
                position: relative;
                width: 50%;
                height: 100%;
                background: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 40px;
                transition: 0.5s;
                }

                section .container .user .formBx form h2 {
                font-size: 18px;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 2px;
                text-align: center;
                width: 100%;
                margin-bottom: 10px;
                color: #555;
                }

                section .container .user .formBx form input {
                position: relative;
                width: 100%;
                padding: 10px;
                background: #f5f5f5;
                color: #333;
                border: none;
                outline: none;
                box-shadow: none;
                margin: 8px 0;
                font-size: 14px;
                letter-spacing: 1px;
                font-weight: 300;
                }

                section .container .user .formBx form input[type='submit'] {
                max-width: 100px;
                background: #677eff;
                color: #fff;
                cursor: pointer;
                font-size: 14px;
                font-weight: 500;
                letter-spacing: 1px;
                transition: 0.5s;
                }

                section .container .user .formBx form .signup {
                position: relative;
                margin-top: 20px;
                font-size: 12px;
                letter-spacing: 1px;
                color: #555;
                text-transform: uppercase;
                font-weight: 300;
                }

                section .container .user .formBx form .signup a {
                font-weight: 600;
                text-decoration: none;
                color: #677eff;
                }

                section .container .signupBx {
                pointer-events: none;
                }

                section .container.active .signupBx {
                pointer-events: initial;
                }

                section .container .signupBx .formBx {
                left: 100%;
                }

                section .container.active .signupBx .formBx {
                left: 0;
                }

                section .container .signupBx .imgBx {
                left: -100%;
                }

                section .container.active .signupBx .imgBx {
                left: 0%;
                }

                section .container .signinBx .formBx {
                left: 0%;
                }

                section .container.active .signinBx .formBx {
                left: 100%;
                }

                section .container .signinBx .imgBx {
                left: 0%;
                }

                section .container.active .signinBx .imgBx {
                left: -100%;
                }

                @media (max-width: 991px) {
                section .container {
                    max-width: 400px;
                }

                section .container .imgBx {
                    display: none;
                }

                section .container .user .formBx {
                    width: 100%;
                }
                }

    </style>
</head>

<body>
    <section>
        <div class="error text-danger"></div>

      <div class="container">
        <div class="user signinBx">
            {{-- https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img1.jpg --}}
          <div class="imgBx"><img src="{{ asset('assets/images/bg_3.jpg') }}" alt="" /></div>
          <div class="formBx">
            <form action="" id="singin" onsubmit="return false;">
              <h2>Sign In</h2>
              @csrf
              <input type="text" name="name" placeholder="name" required>
                <input type="password" name="password" placeholder="Password" required>
              <input type="submit" name="" value="Login" />
              <p class="signup">
                Don't have an account ?
                <a href="#" onclick="toggleForm();">Sign Up.</a>
              </p>
            </form>
          </div>
        </div>

        <div class="user signupBx">

          <div class="formBx">

            <form action="" id="UserData">
                <h2>Create an account</h2>
                <input type="text" placeholder="Username" name="username"/>
                <input type="email" placeholder="Email Address" name="address"/>
                <input type="password" placeholder="Create Password" name="password"/>
                <input type="password" placeholder="Confirm Password" name="password_confirmation"/>
                <input type="number" placeholder="Phone Number" name="phone" maxlength="14" minlength="8" pattern="\d{8,14}">
                <input type="submit" value="Sign Up"/>
              <p class="signup">
                Already have an account ?
                <a href="#" onclick="toggleForm();">Sign in.</a>
              </p>
            </form>
          </div>
          <div class="imgBx"><img src="{{asset('assets/images/bg_3.jpg')}}" alt="" /></div>
        </div>
      </div>
    </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        const toggleForm = () => {
            const container = document.querySelector('.container');
            container.classList.toggle('active');
            };
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">
<script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>

<script>
                  $(document).ready(function() {
                var notyf = new Notyf({
                              position: {
                        x: 'center', 
                        y: 'top' 
                    }
                });

                $('#UserData').on('submit', function(e) {
                    e.preventDefault(); 

                    var formData = $(this).serialize();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '{{ url("UserLogin") }}', 
                        method: 'POST',
                        data: formData,
                        success: function(response) {
                            if(response.msg === 'success') {
                                notyf.success('User create account successful please singup now');
                                setTimeout(function() {
                                    location.reload();                      
                                }, 2000)
                            } else {
                                notyf.error('Error: ' + response.message);
                            }
                        },
                        error: function(xhr) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                // notyf.error(value);
                                notyf.error('Request failed: ' + xhr.responseJSON.message);
                            });
                        }
                    });
                });
            });

            $(document).ready(function() {
              var notyf = new Notyf({
                  position: {
                      x: 'center', // 'left', 'center', 'right'
                      y: 'top' // 'top', 'center', 'bottom'
                  }
              });
            $('#singin').on('submit', function(e) {
                  e.preventDefault(); 

                  var formData = $(this).serialize();
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $.ajax({
                      url: '{{ url("singin") }}', 
                      method: 'POST',
                      data: formData,
                      success: function(response) {
                          if(response.msg === 'success') {
                              notyf.success('Sign in successful. Redirecting...');
                              setTimeout(function() {
                                  window.location.href = "{{ url('/') }}";
                              }, 2000); // 2 seconds delay to show the notification
                          } else {
                              notyf.error('An error occurred. Please try again.');
                          }
                      },
                      error: function(xhr) {
                          var errors = xhr.responseJSON.errors;
                          $.each(errors, function(key, value) {
                              notyf.error(value);
                          });
                      }
                  });
              });
            });
</script>
<script>
  @if(session('success'))
      toastr.success("{{ session('success') }}");
  @endif

  @if($errors->any())
      toastr.error("{{ $errors->first() }}");
  @endif
</script>
</body>

</html>