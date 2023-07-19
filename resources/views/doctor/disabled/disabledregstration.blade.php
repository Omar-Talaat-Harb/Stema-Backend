<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-Regstration</title>
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
            <!--section2-->
            <div class="col-lg-3 col-md-4 col-sm-5 collectionf " style="height: 120vh;">
                <!-- <div class=""> -->
                <div class="  ps-4 pe-4  leftcollection">
                    <div class="contaier mt-5 col-lg-12 flex-column justify-content-center ">
                        <h3 id="unitAdd">Unit Admission</h3>

                        <ul class="navbar-nav justify-content-center leftco ">
                            <li class="nav-item licoll circ1">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check " aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('disabledregstration',$donar->id) }}">
                                    <p class="ps-3 ">Registration</p>
                                </a>
                            </li>

                            <!-- 1 -->
                            <li class="nav-item licoll ">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('disabledcontactdata',$donar->id) }}">
                                    <p class="ps-3">Contact Data</p>
                                </a>
                            </li>

                            <!-- 2 -->
                            {{-- <li class="nav-item licoll circ2">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check"></i>
                                </div>
                                <a href="{{ route('disabledcollection',$donar->id) }}">
                                    <p class="ps-3">Collection</p>
                                </a>
                            </li> --}}
                            <!-- 3 -->
                            <li class="nav-item licoll">
                                <div class="rr bg-light ">
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>
                                <a href="{{ route('laboratory1',$donar->id) }}">
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
                            <a href="{{ route('pending') }}">
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
                            <div class="col-9" style="color: #0EB0BA;">
                                <h1>Donar Data</h1>
                            </div>
                            {{-- <div class="offset-2 col-1">
                                <p>Page 1 of 2</p>
                            </div> --}}

                        </div><!--donarhead-->


                        <div class="row donors mydisable">

                            <div class="col-6">

                                <div class="d-flex donorform1">

                                    <input type="text" class="form-control myformcontrol mydisable" value="{{ $donar->mother_name_ar }}" required id="entry1" style="margin-right:-10px;" disabled>
                                </div>

                            <div class="d-flex donorform1">

                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $donar->national_id  }}" required id="entry2"  style="margin-right:-10px;"disabled>
                            </div>

                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $donar->region  }}" id="entry3"disabled>

                                <input type="text" class="form-control myformcontrol mydisable" style="color: gray;" value= "{{ $donar->date }}" id="entry4"disabled>
                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $donar->rh_first_system }}" id="entry3"disabled>
                                {{-- <select name="RH_system 1" id="RH_system 1" class="form-control myformcontrol mydisable" disabled>

                                    <option value="C">C</option>
                                    <option value="c">c</option>
                                    <option value="D">D</option>
                                    <option value="d">d</option>
                                    <option value="E">E</option>
                                    <option value="e">e</option>
                                </select> --}}

                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $donar->miner_group  }}" id="entry6"disabled>

                            </div>
                            <div class="col-6">

                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $donar->mother_name_en  }}" id="entry7"disabled>
                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $donar->nationality  }}" id="entry8"disabled>
                                

                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $donar->blood_group }}" id="entry3"disabled>
                                

                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $donar->rh }}" id="entry3"disabled>
                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $donar->rh_second_system }}" id="entry3"disabled>
                                {{-- <select name="RH_system2" id="RH_system2" class="form-control myformcontrol mydisable"  disabled>

                                    <option value="C">C</option>
                                    <option value="c">c</option>
                                    <option value="D">D</option>
                                    <option value="d">d</option>
                                    <option value="E">E</option>
                                    <option value="e">e</option>

                                </select> --}}
                                <input type="text" class="form-control myformcontrol mydisable" value= "{{ $donar->result  }}" id="entry12"disabled>
                                <div class="offset-9"> <a href="{{ route('disabledcontactdata',$donar->id) }}" class="btn" style="width:100%;">Next</a>
                                </div>
                            </div>

                        </div><!--inputs-->
                    </div>



                </div>
            </div>

        </div><!--row-->
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
