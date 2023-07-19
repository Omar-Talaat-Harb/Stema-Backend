<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-Contact</title>
    <link rel="shortcut icon" href="{{ asset('assets/disabledregstration') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>
    <section class="container-fluid">

        <div class="row">
            <!-- <div class="col-lg-2 col-md-3 dash"
                style="background: linear-gradient(to bottom, #0EB0BA, #304BAB); height: 100vh;">
                <h2>Unit Admission</h2>
                <nav class="nav flex-column">
                    <div class="d-flex">
                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                        <h5><a class="nav-link active" aria-current="page" href="regisrtation.html">Registration</a></h5>
                    </div><!-- d-flex 1 --
                    <div class="d-flex">
                        <div><i class="fas fa-ellipsis-h" aria-hidden="true"></i></div>
                        <h5><a class="nav-link active" aria-current="page" href="cbu.html">CBU Data</a></h5>
                    </div><!-- d-flex 2 --
                    <div class="d-flex">
                        <div><i class="fas fa-ellipsis-h"></i></div>
                        <h5><a class="nav-link active" aria-current="page" href="collections.html">Collection</a></h5>
                    </div><!-- d-flex 3 --
                    <div class="d-flex">
                        <div><i class="fas fa-ellipsis-h"></i></div>
                        <h5><a class="nav-link active" aria-current="page" href="labratories.html">Labratories</a></h5>
                    </div><!-- d-flex 4 --
                </nav>

            </div> -->
            <!--section2-->
            <div class="col-lg-3 col-md-4 col-sm-5 collectionf " style="height: 100vh;">
                <!-- <div class=""> -->
                <div class="  ps-4 pe-4  leftcollection">
                    <div class="contaier mt-5 col-lg-12 flex-column justify-content-center ">
                        <h3 id="unitAdd">Unit Admission</h3>

                        <ul class="navbar-nav justify-content-center leftco ">
                            <li class="nav-item licoll circ1">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check " aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('disabledregstration',$data['donar']->id) }}">
                                    <p class="ps-3 ">Registration</p>
                                </a>
                            </li>

                            <!-- 1 -->
                            <li class="nav-item licoll ">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('disabledcontactdata',$data['donar']->id) }}">
                                    <p class="ps-3">Contact Data</p>
                                </a>
                            </li>

                            <!-- 2 -->
                            {{-- <li class="nav-item licoll circ2">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check"></i>
                                </div>
                                <a href="{{ route('disabledcollection',$data['donar']->id) }}">
                                    <p class="ps-3">Collection</p>
                                </a>
                            </li> --}}
                            <!-- 3 -->
                            <li class="nav-item licoll ">
                                <div class="ir ">
                                    <i class="fa-regular fa-circle"></i>
                                </div>
                                <a href="{{ route('laboratory1',$data['donar']->id) }}">
                                    <p class="ps-3">Laboratories</p>
                                </a>
                            </li>
                            <!-- 4 -->
                        </ul>

                    </div>
                    
                </div>
                <!-- </div> -->
            </div><!-- left side bar-->
            <div class="col-9 files">
                <div class="container m-auto container-fluid">
                    <div class="d-flex ">
                        <div class="col-lg-1 p-4">
                            <a href="{{ route('disabledregstration',$data['donar']->id) }}">
                                <i class="fas fa-arrow-left fa-2x"></i>
                            </a>
                        </div> <!-- back button -->
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10 hstack gap-2  ms-auto user">
                            <div class=" ms-auto ">
                            <h6>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
                                <p>{{ auth()->user()->role->type }} </p>
                            </div>

                            <a href="{{ route('showProfile') }}"> <img src="{{ asset('assets/images/doctor.svg') }}" alt="user-photo" width="60px"></a>


                        </div>
                        <div class="col-lg-1"></div>


                    </div>
                    <div class="row">
                        <div class="d-flex donrhead mt-5">
                            <div class="col-10" style="color: #0EB0BA;">
                                <h1>Contact Data</h1>
                            </div>
                            {{-- <div class="col-2">
                                <p>Page 2 of 2</p>
                            </div> --}}

                        </div><!--donarhead-->


                        <div class="row donors">
                            <div class="col-6">
                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $data['contact']->phone }}"id="entry1"disabled>
                                <input type="text" class="form-control myformcontrol mydisable" value="{{ $data['contact']->first_address }}" id="entry2" disabled>
                        

                            </div>
                            <div class="col-6">

                                <input type="number" class="form-control myformcontrol mydisable" value="{{ $data['contact']->mobile }}" id="entry3"disabled>
                                <input type="text" class="form-control myformcontrol mydisable" value="{{ $data['contact']->second_address }}" id="entry4"disabled>
                               
                                <div class="offset-9"> <a href="{{ route('laboratory1',$data['donar']->id) }}" class="btn" style="width:100%;">Next</a>
                                </div>
                            </div>

                        </div><!--inputs-->
                    </div>



                </div>
            </div>

        </div><!--row-->
    </section>







    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="JS/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>