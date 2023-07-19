<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-Regstration</title>
    <link rel="shortcut icon" href="{{asset('front/images/Color logo - no background.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('front/CSS/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/style.css')}}">
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
                                <a href="javascript:void(0)">
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
                            <!-- <li class="nav-item licoll circ2">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </div>
                                <a href="#">
                                    <p class="ps-3">Collection</p>
                                </a>
                            </li> -->
                            <!-- 3 -->
                            <li class="nav-item licoll ">
                                <div class="ir">
                                    <i class="fa-regular fa-circle"></i>
                                </div>
                                <a href="#">
                                    <p class="ps-3">Collection</p>
                                </a>
                            </li>
                            <!-- 4 -->
                        </ul>


                    </div>

                </div>
                <!-- </div> -->
            </div><!-- left side bar-->


            <!-- <div class="row">
        <div class="col-md-3 dash"
             style="background: linear-gradient(to bottom, #0EB0BA, #304BAB); height: 100vh;">
            <h2>Unit Admission</h2>
            <nav class="nav flex-column">
                <div class="d-flex">
                    <div>  <i class="fa fa-check" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" href="{{route('register')}}">Registration</a></h5>
                </div> d-flex 1 -->
            <!-- <div class="d-flex">
                    <div><i class="fas fa-ellipsis-h"></i></div>
                    <h5><a class="nav-link active" aria-current="page" >Contact</a></h5>
                </div> -->
            <!-- d-flex 3 -->
            <!-- <div class="d-flex">
                    <div><i class="fas fa-ellipsis-h" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" >CBU Data</a></h5>
                </div> -->
            <!-- d-flex 2 -->
            <!-- <div class="d-flex">
                    <div><i class="fas fa-ellipsis-h" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" >Collection</a></h5>
                </div> -->
            <!-- d-flex 2 -->

            <!-- </nav> -->

            <!-- </div>  -->
            <!--section2-->
            <div class="col-9 files">
                <div class="container m-auto container-fluid">
                    <div class="d-flex ">
                        <div class="col-lg-1 p-4">
                            <a href="{{route('service1')}}">
                                <i class="fas fa-arrow-left fa-2x"></i>
                            </a>
                        </div> <!-- back button -->
                        <div class="col-lg-1"></div>

                        <a href="{{route('showProfile')}}" class="col-lg-10 text-black text-decoration-none">
                            <div class=" hstack ms-auto user">
                                <div class="pt-3  me-3 ms-auto text-capitalize">
                                    <h6 style="line-height:0.8;">{{\Illuminate\Support\Facades\Auth::user()->username}}</h6>
                                    <p class="text-muted"style="font-size:15px;">
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
                                <h1>Donar Data</h1>
                            </div>
                            <div class="offset-2 col-1">
                                <p>Page 1 of 2</p>
                            </div>

                        </div><!--donarhead-->

                        <form action="{{route('register.store')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::id()}}" name="nurse_id">

                            @if(isset($donar))
                                <input type="hidden" value="{{$donar->id}}" name="donar_id">
                            @endif
                            <div class="row donors">

                                <div class="col-6">

                                    <div class="d-flex donorform" style="width:525px;">
                                        <span style="color: #db0000; position: relative;top:30px;left:-3px; margin:5px auto;margin-right:3px;">*</span>

                                        <input name="mother_name_ar" type="text" class="form-control myformcontrol"
                                               value="{{old('mother_name_ar',isset($donar)?$donar->mother_name_ar:'')}}"
                                               placeholder="Mother name in Arabic " required id="entry1" style="border:solid 1px;">
                                        @error('mother_name_ar')
                                        <span class=" text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="d-flex donorform" style="width:525px;">
                                        <span style="color: #db0000; position: relative;top:30px;left:-3px; margin:5px auto; margin-right:3px;">*</span>
                                        <input name="national_id" type="text"
                                               value="{{old('national_id',isset($donar)?$donar->national_id:'')}}"
                                               class="form-control myformcontrol" placeholder="National ID/passport number" required id="entry2"style="border:solid 1px;">

                                    </div>
                                    @error('national_id')
                                    <small class=" text-danger">{{$message}}</small>
                                    @enderror

                                    <input name="region" type="text" class="form-control myformcontrol"
                                           value="{{old('region',isset($donar)?$donar->region:'')}}"
                                           placeholder="Region" id="entry3" style="border:solid 1px;">

                                    <input name="date" type="date" class="form-control myformcontrol"
                                           value="{{old('date',isset($donar)?$donar->date:'')}}"
                                           placeholder="Date of birth" id="entry4" style="border:solid 1px;">


                                    <select name="rh_first_system" id="RH_system 1" class="form-control myformcontrol" style="border:solid 1px;">
                                        <option value="" class="RH">RH system 1</option>
                                        <option value="C" {{!isset($donar) ?: ($donar->rh_first_system =='C'?'selected':'') }}>C</option>
                                        <option value="c" {{!isset($donar) ?: ($donar->rh_first_system =='c'?'selected':'') }}>c</option>
                                        <option value="D" {{!isset($donar) ?: ($donar->rh_first_system =='D'?'selected':'') }}>D</option>
                                        <option value="d" {{!isset($donar) ?: ($donar->rh_first_system =='d'?'selected':'') }}>d</option>
                                        <option value="E" {{!isset($donar) ?: ($donar->rh_first_system =='E'?'selected':'') }}>E</option>
                                        <option value="e" {{!isset($donar) ?: ($donar->rh_first_system =='e'?'selected':'') }}>e</option>
                                    </select>

                                    <input name="miner_group" type="text" class="form-control myformcontrol"
                                           value="{{old('miner_group',isset($donar)?$donar->miner_group:'')}}"
                                           placeholder="Miner group" id="entry6" style="border:solid 1px;">

                                </div>
                                <div class="col-6">

                                    <input name="mother_name_en" type="text" class="form-control myformcontrol" placeholder="Mother name in English" id="entry7"style="border:solid 1px;">
                                    <input name="nationality" type="text" class="form-control myformcontrol" placeholder="Nationality" id="entry8"style="border:solid 1px;">
                                    <div class="d-flex donorform">
                                        <span style="color: #db0000; position: relative;top:-11px;left:-3px; margin:5px auto;">*</span>
                                        <select name="blood_group" id="Blood Group" class="form-control myformcontrol" style="margin-right:-10px;border:solid 1px;">
                                            <option value="{{null}}" class="BloodGroup">Blood Group</option>
                                            <option value="A" {{!isset($donar) ?: ($donar->blood_group =="A" ?'selected':'')}}>A</option>
                                            <option value="B" {{!isset($donar) ?: ($donar->blood_group =="B" ?'selected':'')}}>B</option>
                                            <option value="AB" {{!isset($donar) ?: ($donar->blood_group =="AB" ?'selected':'')}}>AB</option>
                                            <option value="O" {{!isset($donar) ?: ($donar->blood_group =="O" ?'selected':'')}}>O</option>

                                        </select>

                                    </div>
                                    @error('blood_group')
                                    <span class=" text-danger">{{$message}}</span>
                                    @enderror

                                    <select name="rh" id="RH" class="form-control myformcontrol"style="border:solid 1px;">
                                        <option value="RH" class="RH" {{!isset($donar) ?: ($donar->rh == 'RH'?'selected':'')}}>RH</option>
                                        <option value="Positive" {{!isset($donar) ?: ($donar->rh == 'Positive'?'selected':'')}}>Positive</option>
                                        <option value="Negative" {{!isset($donar) ?: ($donar->rh == 'Negative'?'selected':'')}}>Negative</option>


                                    </select>
                                    <select name="rh_second_system" id="RH_system2" class="form-control myformcontrol"style="border:solid 1px;">
                                        <option value="RH_system2" class="RH" {{!isset($donar) ?: ($donar->rh_second_system == 'RH_system2'?'selected':'')}}>RH system2</option>
                                        <option value="C" {{!isset($donar) ?: ($donar->rh_second_system == 'C'?'selected':'')}}>C</option>
                                        <option value="c" {{!isset($donar) ?: ($donar->rh_second_system == 'c'?'selected':'')}}>c</option>
                                        <option value="D" {{!isset($donar) ?: ($donar->rh_second_system == 'D'?'selected':'')}}>D</option>
                                        <option value="d" {{!isset($donar) ?: ($donar->rh_second_system == 'd'?'selected':'')}}>d</option>
                                        <option value="E" {{!isset($donar) ?: ($donar->rh_second_system == 'E'?'selected':'')}}>E</option>
                                        <option value="e" {{!isset($donar) ?: ($donar->rh_second_system == 'e'?'selected':'')}}>e</option>

                                    </select>
                                    <input name="result" type="text" class="form-control myformcontrol"
                                           value="{{old('result',isset($donar)?$donar->result:'')}}"
                                           placeholder="Result" id="entry12" style="border:solid 1px;">
                                    <div class="offset-9"> <button class="btn" style="width:100%;">Next</button>
                                    </div>
                                </div>

                            </div><!--inputs-->
                        </form>
                    </div>



                </div>
            </div>


        </div><!--main row-->
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
