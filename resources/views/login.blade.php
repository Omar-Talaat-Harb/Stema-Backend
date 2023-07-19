<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stema-LogIn</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/Color logo - no background.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>
    <section>
        <div class="container-fluid m-auto p-5 ">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 left-side text-center">
                    <h4 class="mb-5">Sign-up now to start building your work in minutes. It's easy!</h4>
                    <br /> <br /> <br /> <br />
                    <div class="overflow-div">

                        <div class="image"  data-aos="fade-up">
                            <img src="{{ asset('assets/images/2.png') }}" alt="doctor-photo" width="750px">
                        </div>
                    </div>
                </div><!--  left-side -->
                <div class="col-lg-2 col-sm-2 col-md-2 col-xl-2"></div>
                <!----------------  right-side ------------>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 right-side m-auto">
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-lg-6  col-sm-6 col-md-6 col-xl-6 mt-1">
                                <h4>LogIn</h4>
                                <h6 class="mb-2 text-muted">For business, band or celebrity.</h6>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                                <a href="index.html">
                                    <img src="{{ asset('assets\images\Color logo - no background.png') }}" alt="STEMA-logo" width="100px" data-aos="fade-down">
                                </a>
                            </div>
                        </div> <!-- end of row -->

                        <form class="g-3 mt-3" method="POST" action="{{ route('postlogin') }}" >
                            @csrf
                            <div class="col-lg-7  mb-3">
                                <label for="inputUname" class="form-label">UserName</label>
                                <input type="text" class="form-control" id="inputUname" name="username">
                            </div> <!-- username-->

                            <div class="col-lg-7  mb-3">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" name="password">

                                <!-- <a href="forgetPass.html" class="forget-link">Forget Password?</a> -->

                            </div>
                            <!--password-->

                            <div class="col-12 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Remember Me
                                    </label>
                                </div>
                            </div> <!-- remember-checkBox -->
                            <div class="d-grid gap-2 col-lg-7 col-md-11 my-auto d-inline mt-1 mb-3">
                                <input class="btn btn-primary"  type="submit" value="login">
                                <!-- <p class="text-center">
                                    - Don't have an account? <a href="signup.html">Sign-Up</a>
                                </p> -->
                                @if (session()->has('failed'))
                                <div class="alert alert-danger text-center">
                                    {{ session()->get('failed') }}
                                </div>


                                @endif
                            </div>
                        </form>
                    </div>

                </div><!--  right-side -->
            </div> <!-- row  -->
        </div>
    </section>

    <script src="{{ asset('assets/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/JS/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('assets/JS/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
