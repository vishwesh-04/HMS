<html>

<head>
    <title>HMS</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

    <style>
        .form-control {
            border-radius: 0.75rem;
        }
    </style>

    <script>
        var check = function () {
            if (document.getElementById('password').value ==
                document.getElementById('cpassword').value) {
                document.getElementById('message').style.color = '#5dd05d';
                document.getElementById('message').innerHTML = 'Matched';
            } else {
                document.getElementById('message').style.color = '#f55252';
                document.getElementById('message').innerHTML = 'Not Matching';
            }
        }

        function alphaOnly(event) {
            var key = event.keyCode;
            return ((key >= 65 && key <= 90) || key == 8 || key == 32);
        };

        function checklen() {
            var pass1 = document.getElementById("password");
            if (pass1.value.length < 6) {
                alert("Password must be at least 6 characters long. Try again!");
                return false;
            }
        }

    </script>

</head>

<!------ Include the above in your HEAD tag ---------->

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>MediCare</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>
  
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
    <div class="container-fluid vh-100 p-4">
        <nav class="navbar navbar-expand-lg navbar-dark mb-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#">Medicare</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" style="margin-right: 40px;">
                            <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;">Home</a>
                        </li>

                        <li class="nav-item" style="margin-right: 40px;">
                            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;">About
                                Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row mb-3">
            <div class="d-flex justify-content-center align-items-center fs-3 text-light">Welcome</div>
        </div>

        <div class="container border border-dark h-75 rounded rounded-4 bg-body shadow" style="width: 30%">
            <div class="container mt-2">
                <ul class="nav nav-pills nav-justified mb-3 text" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Patient</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Doctor</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Receptionist</button>
                    </li>
                </ul>

            </div>

            <div class="container">

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <h4 class="mb-4">Register as Patient</h4>
                        <form method="post" action="func2.php">
                            <div class="input-group my-2">
                                <input type="text" class="form-control" placeholder="First Name" name="fname"
                                    onkeydown="return alphaOnly(event);" required />
                                <input type="text" class="form-control" placeholder="Last Name" name="lname"
                                    onkeydown="return alphaOnly(event);" required />
                            </div>
                            <div class="input-group my-2">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                                <input type="email" class="form-control" placeholder="Your Email" name="email" />
                            </div>
                            <div class="input-group my-2">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                                <input type="password" class="form-control" placeholder="Password" id="password"
                                    name="password" onkeyup='check();' required />
                            </div>
                            <div class="form-check my-2">
                                <input type="radio" name="gender" value="Male" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="gender" value="Female">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </div>

                            <div class="input-group my-2">
                                <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control"
                                    placeholder="Your Phone *" />
                            </div>
                            <div class="input-group my-2">
                                <input type="password" class="form-control" id="cpassword"
                                    placeholder="Confirm Password *" name="cpassword" onkeyup='check();'
                                    required /><span id='message'></span>
                            </div>
                            <a href="index1.php" class="d-block">Already have an account?</a>
                            <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();"
                                value="Register" />

                        </form>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <h3 class="mb-4">Login as Doctor</h3>
                        <form method="post" action="func1.php">
                            <div class="input-group my-2">
                                <input type="text" class="form-control" placeholder="User Name *" name="username3"
                                    onkeydown="return alphaOnly(event);" required />
                            </div>
                            <div class="input-group my-2">
                                <input type="password" class="form-control" placeholder="Password *" name="password3"
                                    required />
                            </div>

                            <input type="submit" class="btnRegister" name="docsub1" value="Login" />

                        </form>
                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">
                        <h3 class="mb-4">Login as Admin</h3>
                        <form method="post" action="func3.php">
                            <div class="input-group my-2">
                                <input type="text" class="form-control" placeholder="User Name *" name="username1"
                                    onkeydown="return alphaOnly(event);" required />
                            </div>
                            <div class="input-group my-2">
                                <input type="password" class="form-control" placeholder="Password *" name="password2"
                                    required />
                            </div>

                            <input type="submit" class="btnRegister" name="adsub" value="Login" />

                        </form>
                    </div>
                </div>


            </div>
        </div>

    </div>

</body>


</html>