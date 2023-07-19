<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stema</title>
    <link rel="shortcut icon" href="{{asset('front/images/Color logo - no background.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('front/CSS/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/style.css')}}">
</head>

<body>
<nav class="navbar navbar-expand-lg ps-3 navbar-light "
     style="background: linear-gradient(to right, #0EB0BA,#3080ab);">
    <div class="container-fluid">
        <a class="navbar-brand ms-5 ps-5" href="#"><img src="{{asset('front/images/White logo - no background.png')}}" alt="STEMA"
                                                        width="130px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">
            <!-- <form class="d-flex hstack gap-2 me-5" role="loging">
              <a class="btn ms-auto" href="signup.html" target="_blank">SignUp</a>
              <div class="vr" style="color:white ;"></div>
              <a class="btn" href="login.html" target="_blank">LogIn</a>
            </form> -->
            <div class="d-flex hstack gap-2 ms-auto me-1 user-services">
                <div class="pt-3  me-3">
                    <h6 style="line-height: 0.8; ">{{\Illuminate\Support\Facades\Auth::user()->username}}</h6>
                    <p style="font-size:15px;">
                        Nurse
                    </p>
                </div>

                <a href="{{ route('showProfile') }}"> <img src="{{asset('front/images/nurse.svg')}}" alt="user-photo" width="60px"></a>


            </div>


        </div>
    </div>
</nav>
<section class="services">
    <div class="container">
        <div class="row ">
            <div class="row row-cols-1 row-cols-md-3 g-4 m-5 p-5">

                <div class="offset-2 col" data-aos="fade-down">
                    <a href="{{route('register')}}" style="text-decoration: none;">
                        <div class="card">
                            <img src="{{asset('front/images/id-card.png')}}" class="card-img-top" alt="unit Admission photo">
                            <div class="card-body">
                                <h5 class="card-title text-center">Unit Admission</h5>
                            </div>
                        </div>
                    </a>
                </div> <!-- card1 -->

                <div class="col" data-aos="fade-up">
                    <a href="{{route('report')}}" style="text-decoration: none;">
                        <div class="card">
                            <img src="{{asset('front/images/writing.png')}}" class="card-img-top" alt="Report photo">
                            <div class="card-body">
                                <h5 class="card-title text-center">Report</h5>

                            </div>
                        </div>
                    </a>
                </div> <!-- card2 -->



            </div>

        </div>
    </div>
</section>



<script src="{{asset('front/JS/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('front/JS/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{asset('front/JS/aos.js')}}"></script>
<script>
    AOS.init();
</script>
</body>

</html>
