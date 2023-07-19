<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-CBU</title>
    <link rel="shortcut icon" href="{{asset('front/images/Color logo - no background.png')}}" type="image/x-icon">
    <link rel=" stylesheet" href="{{asset('front/CSS/all.min.css')}}">
    <link rel=" stylesheet" href="{{asset('front/CSS/animate.css')}}">
    <link rel=" stylesheet" href="{{asset('front/CSS/bootstrap.min.css')}}">
    <link rel=" stylesheet" href="{{asset('front/CSS/aos.css')}}">
    <link rel=" stylesheet" href="{{asset('front/CSS/style.css')}}">
</head>

<body>
<section class="container-fluid">

    <div class="row">


    <div class="col-lg-3 col-md-3 col-sm-3 collectionf" style="height: 120vh;margin-left:-90px;padding-left:100px;">
                <!-- <div class=""> -->
                <div class="leftcollection">
                    <div class="contaier mt-5 col-lg-12 flex-column justify-content-center ">
                        <h3 id="unitAdd">Unit Admission</h3>

                        <ul class="navbar-nav justify-content-center leftco ">
                            <li class="nav-item licoll circ1">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check " aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('register') }}">
                                    <p class="ps-3 ">Registration</p>
                                </a>
                            </li>

                            <!-- 1 -->
                            <li class="nav-item licoll ">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </div>
                                <a href="#">
                                    <p class="ps-3">CBU Data</p>
                                </a>
                            </li>

                            <!-- 2 -->

                            <!-- 3 -->
                            <li class="nav-item licoll ">
                                <div class="ir">
                                    <i class="fa-regular fa-circle"></i>
                                </div>
                                <a href="#">
                                    <p class="ps-3">Collection</p>
                                </a>
                            </li>
                            <!-- 3-->
                        </ul>


                    </div>

                </div>
                <!-- </div> -->
            </div><!-- left side bar-->





        <!-- <div class="col-lg-2 col-md-3 dash"
             style="background: linear-gradient(to bottom, #0EB0BA, #304BAB); height: 100vh;">
            <h2>Unit Admission</h2>
            <nav class="nav flex-column">
                <div class="d-flex">
                    <div><i class="fa fa-check" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" > Registration</a></h5>
                </div> -->
                <!-- d-flex 1 -->
                <!-- <div class="d-flex">
                    <div><i class="fas fa-ellipsis-h"></i></div>
                    <h5><a class="nav-link active" aria-current="page" href="{{route('contact',$id)}}">Contact</a></h5>
                </div> -->
                <!-- d-flex 3 -->
                <!-- <div class="d-flex">
                    <div><i class="fa fa-check" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" >CBU Data</a></h5>
                </div>  -->
                <!-- d-flex 2 -->
                <!-- <div class="d-flex">
                    <div><i class="fas fa-ellipsis-h" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" >Collection</a></h5>
                </div> -->
                <!-- d-flex 2 -->
                <!--
            </nav>

        </div> -->
        <!--section2-->

        <div class="col-9 files">
            <div class="container m-auto container-fluid">
                <div class="d-flex ">
                    <div class="col-lg-1 p-4">
                        <a href="{{ route('register',['id'=>$id]) }}">
                            <i class="fas fa-arrow-left fa-2x"></i>
                        </a>
                    </div> <!-- back button -->
                    <div class="col-lg-1"></div>
<!--
                    <div class="col-lg-10 hstack gap-2  ms-auto user">
                        <div class=" ms-auto ">
                            <h6>{{\Illuminate\Support\Facades\Auth::user()->username}}</h6>
                            <p class="text-muted">
                                Nurse
                            </p>
                        </div>

                        <a href="profile.html"> <img src="{{ asset('assets/images/nurse.svg') }}" alt="user-photo" width="60px"></a>

                    </div> -->
                    <a href="{{route('showProfile')}}" class="col-lg-10 text-black text-decoration-none">
                            <div class=" hstack ms-auto user">
                                <div class="pt-3  me-3 ms-auto text-capitalize">
                                    <h6 style="line-height: 0.8;">{{\Illuminate\Support\Facades\Auth::user()->username}}</h6>
                                    <p class="text-muted" style="font-size:15px;">
                                        Nurse
                                    </p>
                                </div>

                                <img src="{{asset('front/images/nurse.svg')}}" alt="user-photo" width="58px">

                            </div>
                        </a>

                    <div class="col-lg-1"></div>


                </div>
                <div class="row">
                    <div class="d-flex donrhead mt-5">
                        <div class="col-9" style="color: #0EB0BA;">
                            <h1>Contact Data</h1>
                        </div>
                        <div class="offset-2 col-1">
                            <p>Page 2 of 4</p>
                        </div>

                    </div><!--donarhead-->


                    <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="row donors">
                            @if(isset($contact))
                                <input type="hidden" name="contact_id" value="{{$contact->id}}">
                            @endif
                            <input type="hidden" name="donar_id" value="{{$id}}">
                            <div class="col-6">
                                <input name="phone" type="number" class="form-control myformcontrol"
                                       value="{{old('phone',isset($contact) ? $contact->phone : '')}}"
                                       placeholder="Phone number 1 " id="entry1" style="border:solid 1px;">
                                @error('phone')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                                <input name="first_address" type="text" class="form-control myformcontrol"
                                       value="{{old('first_address',isset($contact) ? $contact->first_address : '')}}"
                                       placeholder="Address 1" id="entry2" style="border:solid 1px;">
                                @error('first_address')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror

                            </div>
                            <div class="col-6">

                                <input name="mobile" type="number" class="form-control myformcontrol"
                                       value="{{old('mobile',isset($contact) ? $contact->mobile : '')}}"
                                       placeholder="Phone number 2" id="entry3" style="border:solid 1px;">
                                @error('mobile')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                                <input name="second_address" type="text"
                                       value="{{old('second_address',isset($contact) ? $contact->second_address : '')}}"
                                       class="form-control myformcontrol" placeholder="Address 2" id="entry4" style="border:solid 1px;">
                                @error('second_address')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                                <div class="offset-9"> <button class="btn" style="width:100%;">Next</button>
                                </div>
                            </div>

                        </div><!--inputs-->
                    </form>
                </div>



            </div>
        </div>


    </div><!--row-->
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
