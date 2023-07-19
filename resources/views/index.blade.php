<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stema-Home</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/Color logo - no background.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>

    <header id="myheader">
    <nav class="navbar navbar-expand-lg ps-3 navbar-light fixed-top"
        style="background: linear-gradient(to right, #0EB0BA, #3080ab);">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 ps-5" href=""><img src="{{ asset('assets/images/White logo - no background.png') }}" alt="STEMA" width="125px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">

            <ul style="list-style: none;margin-top: 20px;">
                        <li style=" display: inline-block;margin-right:90px;" class="nav-item">
                            <a style="text-decoration: none; color: white;text-transform: uppercase;letter-spacing: 2px;" 
                            class="nav-link" aria-current="page" href="#myheader">Home</a>
                        </li>

                        <li style=" display: inline-block;margin-right: 90px;" class="nav-item" style="margin-left: 10%;">
                            <a style="text-decoration: none;color: white;text-transform: uppercase;letter-spacing: 2px;"
                         class="nav-link" href="#myvideo">Services</a>
                        </li>

                        <li style=" display: inline-block;margin-right: 90px;" class="nav-item">
                            <a style="text-decoration: none;color: white;text-transform: uppercase;letter-spacing: 2px;"
                          class="nav-link" href="#myfooter">Contact Us</a>
                        </li>

                    </ul>
                    


                
                <form role="loging" style="position: relative;right:-30%;">
                        <a class="btn" href="{{ route('login') }}" >Sign in</a>
                    </form>
            </div>
        </div>
    </nav>

        <header style="
        margin-top:10%;
        margin-left: 3%;
        margin-right: 3%;
        min-height:70vh;
        background-image:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4)),url({{ asset('assets/images/s1.jpg') }});
        background-position: center;
        background-size: cover;">
            <div class="container">

                <div style="position: absolute; top: 45%; left:23%; text-align: center;color: white;">
                    <h2>We carry out world-class research into stem cell matching<br> and transplants to improve
                        outcomes for all patients</h2>
                    <a  href="{{ route('login') }}" class="btn" style="margin-top: 4%; width:17%;">learn more</a>


                </div><!-- hero-box -->
            </div><!-- container -->

        </header>
    </header>

    <section id="features" data-aos="fade-up">
        <div class="container">


        <div class="row">

<div class="col-lg-3 col-md-3 box ">
    <img src="{{ asset('assets/images/clock.svg') }}" alt="" srcset=""style="width:65px" >
    <h3 style="margin-top: 20px;">Diagnosing</h3>
    <p>Every 14 minutes, someone is diagnosed with blood cancer or a related disorder </p>
</div><!-- 1 -->
<div class="col-lg-3 col-md-3 box ">
    <!-- <i class=" fas fa-solid fa-bone fa-3x"></i> -->

    <img src="{{ asset('assets/images/bone.svg') }}"alt="" srcset="" style="width:60px">
    <h3 style="margin-top: 20px;">Bone marrow</h3>
    <p>Over 2,000 people in the UK are in need of a bone marrow or stem cell transplant every year

    </p>
</div><!-- 2 -->

<div class="col-lg-3 col-md-3 box ">
    <img src="{{ asset('assets/images/Vector.svg') }}" alt="" srcset="" style="width:65px">
    <!-- <i class="fas fa-money-bill-wave fa-3x"></i> -->
    <!-- <link rel="stylesheet" class="f" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> -->
    <h3 style="margin-top: 20px;">Costs</h3>
    <p>It costs about £40 to recruit each potential donor to the stem cell register

    </p>
</div><!-- 3 -->


</div><!-- row -->
<div class="row">

<div class="col-lg-3 col-md-3 box ">
  
    <img src="{{ asset('assets/images/respond.svg') }}" alt="" srcset="" style="width:65px">
    <h3 style="margin-top: 20px;">Responds</h3>
    <p>50% of the patients respond to treatment with these cells. </p>
</div><!-- 1 -->
<div class="col-lg-3 col-md-3 box ">
  
    <img src="{{ asset('assets/images/donation.svg') }}" alt="" style="width:65px">
    <h3 style="margin-top: 20px;">Donation</h3>
    <p>Every day, at least five people start their search for a matching unrelated stem cell donor
    </p>
</div><!-- 2 -->

<div class="col-lg-3 col-md-3 box ">
  
    <img src="{{ asset('assets/images/conclusion.svg') }}" alt="" srcset="" style="width:65px">

    <h3 style="margin-top: 20px;">Conclusion</h3>
    <p>75% of UK patients won’t find a matching donor in their families

    </p>
</div><!-- 3 -->


</div><!-- row -->



            <!-- <div class="row">

                <div class="col-lg-3 col-md-3 box ">
                <img src="images/clock.svg" alt="" srcset="">
                    <i class="fas fa-clock fa-3x"></i>
                    <h3>Diagnosing</h3>
                    <p>Every 14 minutes, someone is diagnosed with blood cancer or a related disorder </p>
                </div> -->
                <!-- 1 -->
                <!-- <div class="col-lg-3 col-md-3 box ">
                    <i class=" fas fa-solid fa-bone fa-3x"></i>
                    <h3>Bone marrow</h3>
                    <p>Over 2,000 people in the UK are in need of a bone marrow or stem cell transplant every year

                    </p>
                </div> -->
                <!-- 2 -->
<!-- 
                <div class="col-lg-3 col-md-3 box ">
                    <i class="fas fa-money-bill-wave fa-3x"></i>
                    <h3>Costs</h3>
                    <p>It costs about £40 to recruit each potential donor to the stem cell register

                    </p>
                </div> -->
                <!-- 3 -->


            <!-- </div> -->
            <!-- row -->
            <!-- <div class="row">

                <div class="col-lg-3 col-md-3 box ">
                    <i class="fas fa-user-check fa-3x"></i>
                    <h3>Responds</h3>
                    <p>50% of the patients respond to treatment with these cells. </p>
                </div> -->
                <!-- 1 -->
                <!-- <div class="col-lg-3 col-md-3 box ">
                    <i class="fas fa-hand-holding-heart fa-3x"></i>
                    <h3>Donation</h3>
                    <p>Every day, at least five people start their search for a matching unrelated stem cell donor
                    </p>
                </div> -->
                <!-- 2 -->

            <!-- <div class="col-lg-3 col-md-3 box ">
                    <i class="fas fa-users fa-3x"></i>

                    <h3>Conclusion</h3>
                    <p>75% of UK patients won’t find a matching donor in their families

                    </p>
                </div>3 -->


            </div><!-- row -->
        </div><!-- container -->
    </section><!-- features -->
    <!--  -->


    <section id="myvideo" data-aos="fade-up"style="text-align:center; margin-top: 5%; ">
<div class="container">
<h3 style="margin-bottom: 5px;">Get to know STEMA services</h3>
<hr style="  width:20%;
background-color: #0EB0BA;
border: solid #0EB0BA 4px;
margin:  15px auto;
border-radius: 5px;">
 <img id="mypic"src="{{ asset('assets/images/Color logo with background.png') }}" style="position: absolute;
cursor: pointer;
transition: 1s;
width: 71%;
height: 500px; border-radius: 15px;" onclick="myfun()">
    <iframe src="{{ asset('assets/images/servicesvideo.mp4') }}" type="video/mp4" title="Vimeo video"
   width="80%" height="500px" style="border-radius: 15px;"allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
</div>

   

</section><!--video-->



    <section id="stem" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3>What Are Stem Cells?</h3>
                    <p>Stem cells are special human cells that are able to develop into many different cell types. This
                        can range from muscle cells to brain cells. In some cases, they can also fix damaged tissues.
                        Researchers believe that stem cell-based therapies may one day be used to treat serious
                        illnesses such as paralysis and Alzheimer disease.
                    </p>

                    <h3>Types Of Stem Cells?</h3>
                    <p>Stem cells are divided into 2 main forms. They are embryonic stem cells and adult stem cells.
                        Embryonic stem cells. The embryonic stem cells used in research today come from unused embryos.
                        These result from an in vitro fertilization procedure. They are donated to science. These
                        embryonic stem cells are pluripotent. This means that they can turn into more than one type of
                        cell.
                        Adult stem cells. There are 2 types of adult stem cells. One type comes from fully developed
                        tissues such as the brain, skin, and bone marrow. There are only small numbers of stem cells in
                        these tissues. They are more likely to generate only certain types of cells. For example, a stem
                        cell that comes from the liver will only make more liver cells.
                        The second type is induced pluripotent stem cells. These are adult stem cells that have been
                        changed in a lab to be more like embryonic stem cells. Scientists first reported that human stem
                        cells could be changed in this way in 2006. Induced pluripotent stem cells don't seem to be
                        different from embryonic stem cells, but scientists have not yet found one that can develop
                        every kind of cell and tissue
                    </p>

                </div><!-- text -->

                <div class="col-md-4 stem">
                    <img src="{{ asset('assets/images/chemist-doctor-explaining-coworker-vaccine-development-dna-mutations-working-equipped-laboratory.jpg') }}" alt="search" >
                </div><!-- img -->

            </div><!-- row -->
        </div><!-- container -->
    </section><!-- explorer details -->

    <!-- <footer class="footer  p-5" data-aos="fade-up"  style="background: #0EB0BA;">
        <section class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 pb-2 pr-3">
                    <a class="navbar-brand ms-5 ps-5" href="#"><img src="{{ asset('assets/images/White logo - no background.png') }}" alt="STEMA" width="100px"></a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, quia?</p>


                </div> -->
                <!-- 1footerfollow -->

<!-- 
                <div class="col-md-3 pb-1 col-sm-6 text-center footerpages">
                    <h6 class="footer-h6">Pages : </h6>
                    <ul>
                        <li><a href="home.html">Home </a></li>
                        <li><a href="indexAbout.html">About</a></li>

                        <li><a href="indexServices.html">Services</a></a></li>
                        <li><a href="#contact">Contact</a></a></li>
                    </ul>
                </div> -->
                <!-- 2 -->

                <!-- <div class="col-md-3 pb-1 col-sm-6 Contact">
                    <h6 class="footer-h6" id="contact">Contact Us : </h6>
                    <div class="">
                        <p> <i class="fas fa-phone-alt p-1"></i> (406)555-0120</p>
                        <p> <i class="far fa-envelope p-1"></i> mangcoding123@gmail.com</p>
                        <p> <i class="fas fa-map-marker-alt p-1"></i> 2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                    </div>
                </div> -->
                <!-- 3  -->

                <!-- <div class="col-md-3 col-sm-6 text-center footerfollow">
                    <h6 class="footer-h6">Follow Us : </h6>
                    <ul class="">
                        <li><a href="#"><i class="  fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="  fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="  fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="  fab fa-instagram"></i></a></li>
                    </ul>
                </div> -->
                <!-- 4 -->

            <!-- </div> -->
            <!-- row -->
        <!-- </section> -->
         <!-- container footer -->
    <!-- </footer> -->



    <footer class="footer  p-5" data-aos="fade-up" style="background: #0EB0BA;" id="myfooter">
        <section class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6 pb-2 pr-3" >
                    <a class="navbar-brand ms-5 ps-5" href="#"><img src="{{ asset('assets/images/White logo - no background.png') }}"
                            alt="STEMA" width="175px"></a>
                   

                </div><!-- 1footerfollow -->


                <div class="col-md-4 pb-1 col-sm-6 Contact">
                    <h6 class="footer-h6" id="contact">Contact Us : </h6>
                    <div class="">
                        <p> <i class="fas fa-phone-alt p-1"></i> (406)555-0120</p>
                        <p> <i class="far fa-envelope p-1"></i> mangcoding123@gmail.com</p>
                        <p> <i class="fas fa-map-marker-alt p-1"></i> 2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                    </div>
                </div><!-- 3  -->

                <div class="col-md-4 col-sm-6 text-center footerfollow">
                    <h6 class="footer-h6">Follow Us : </h6>
                    <ul class="">
                        <li><a href="#"><i class="  fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="  fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="  fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="  fab fa-instagram"></i></a></li>
                    </ul>
                </div><!-- 4 -->

            </div><!-- row -->
        </section> <!-- container footer -->
    </footer>


    <script>
    var mypic=document.getElementById("mypic")
    function myfun(){
        mypic.style.display = "none";
    }
</script>

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
