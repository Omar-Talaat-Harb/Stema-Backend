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

    <div class="row" >


      <div class="col-lg-3 col-md-3 col-sm-3 collectionf" style="height: 120vh;margin-left:-90px;padding-left:100px;">
                <!-- <div class=""> -->
                <div class="leftcollection">
                    <div class="contaier mt-5 col-lg-12 flex-column justify-content-center ">
                        <h3 id="unitAdd">Unit Admission</h3>

                        <ul class="navbar-nav justify-content-center leftco ">
                            <li class="nav-item licoll">
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
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <a href="{{route('cbu',$id)}}">
                                    <p class="ps-3">CBU Data</p>
                                </a>
                            </li>

                            <!-- 2 -->

                            <li class="nav-item licoll ">
                                <div class="ir">
                                    <i class="fa-regular fa-circle"></i>
                                </div>
                                <a href="#">
                                    <p class="ps-3">Collection</p>
                                </a>
                            </li>
                            <!-- 3 -->
                        </ul>


                    </div>

                </div>
                <!-- </div> -->
            </div>
            <!-- left side bar-->






            </nav>

        </div>
        <!--section2-->

        <div class="col-9 files" style="position:absolute; top:20px;left:290px">
            <div class="container m-auto container-fluid">
                <div class="d-flex ">
                    <div class="col-lg-1 p-4">
                        <a href="{{route('contact',['id'=>$id])}}">
                            <i class="fas fa-arrow-left fa-2x"></i>
                        </a>
                    </div> <!-- back button -->
                    <div class="col-lg-1"></div>


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
                            <h1>CBU Data</h1>
                        </div>
                        <div class="offset-2 col-1">
                            <p>Page 3 of 4</p>

                        </div>

                    </div><!--cbu-->

                    <form action="{{route('cbu.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="row donors">
                          @if(isset($cbu))
                              <input type="hidden" name="cbu_id" value="{{$cbu->id}}">
                          @endif
                         <input type="hidden" name="donar_id" value="{{$id}}">
                         <div class="col-6">
                            <div class="d-flex donorform" style="margin-left:2px;">

                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-3px; margin:5px auto;">*</span>
                                <input name="hospital_name"
                                       value="{{old('hospital_name',isset($cbu)?$cbu->hospital_name:'')}}"
                                       type="text" class="form-control myformcontrol" placeholder="Hospital name "
                                       required id="entry1" style="border:solid 1px;">
                            </div>
                            @error('hospital_name')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror
                            <div class="d-flex">
                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-3px; margin:5px auto;">*</span>
                                <select name="donation_type" id="RH_system 1" class="form-control myformcontrol " style="border:solid 1px;"
                                        required>
                                    <option value="" class="Donation_type">Donation type</option>
                                    <option value="Public" {{!isset($cbu) ?: ($cbu->donation_type=='Public' ?'selected':'') }}>Public</option>
                                    <option value="Private" {{!isset($cbu) ?: ($cbu->donation_type=='Private' ?'selected':'') }}>Private</option>
                                </select>
                            </div>
                            @error('donation_type')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror


                        </div>
                        <div class="col-6">

                            <input name="hospital_number" type="number"
                                   value="{{old('hospital_number',isset($cbu)?$cbu->hospital_number:'')}}"
                                   class="form-control myformcontrol" placeholder="Hospital number" style="border:solid 1px;"
                                   id="entry3" required>
                            @error('hospital_number')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror

                            <div class="d-flex" style="margin-top: -41px; margin-left: -10px;">
                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-3px; margin:5px auto;">*</span>
                                <select name="stem_sells" id="source" class="form-control myformcontrol" required style="border:solid 1px;">
                                    <option value="" class="source">Source of stem cells</option>
                                    <option value="Cord_tissue" {{!isset($cbu) ?: ($cbu->stem_sells =='Cord_tissue' ?'selected':'')}}>Cord Tissue</option>
                                    <option value="Cord_blood" {{!isset($cbu) ?: ($cbu->stem_sells =='Cord_blood' ?'selected':'')}}>Cord Blood</option>
                                    <option value="Amniotic" {{!isset($cbu) ?: ($cbu->stem_sells =='Amniotic' ?'selected':'')}}>Amniotic Fluid</option>
                                </select>
                            </div>
                            @error('stem_sells')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-12">
                        @error('donar_consest')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror

                            <div class="d-flex chosefile">
                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-15px; margin:5px auto;">*</span>
                                <div class="image-upload" style="margin-top:55px; margin-right: -30px; z-index: 2;">
                                    <label for="file-input" >
                                        <img src="{{asset('front/images/attach.svg')}}"/>
                                    </label>

                                    <input name="donar_consest" id="file-input" type="file" style="border:solid 1px;" />
                                </div>
                                <input type="text" class="form-control myformcontrol attach"
                                       placeholder="Cord Blood Donar Consent" id="entry4" style="border:solid 1px;">
                            </div>
                           
                            @error('donar_agreement')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror
                            <div class="d-flex chosefile">
                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-15px; margin:5px auto;">*</span>
                                <div class="image-upload" style="margin-top:55px; margin-right: -30px; z-index: 2;">
                                    <label for="file2-input" >
                                        <img src="{{asset('front/images/attach.svg')}}"/>
                                    </label>

                                    <input name="donar_agreement" id="file2-input" type="file" style="border:solid 1px;"/>
                                </div>
                                <input type="text" class="form-control myformcontrol attach"
                                       placeholder="Cord Blood Donor Agreement" id="entry5" style="border:solid 1px;">
                            </div>
                            @error('unit_image')
                            <span class=" text-danger"style="margin-top:-15px;">{{$message}}</span>
                            @enderror
                            <div class="d-flex chosefile">
                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-15px; margin:5px auto;">*</span>
                                <div class="image-upload" style="margin-top:55px; margin-right: -30px; z-index: 2;">
                                    <label for="file-input3" >
                                        <img src="{{asset('front/images/attach.svg')}}"/>
                                    </label>

                                    <input name="unit_image" id="file-input3" type="file" />
                                </div>
                                <input type="text" class="form-control myformcontrol attach" placeholder="CBU Unit Image"
                                       id="entry6" style="border:solid 1px;">

                            </div>
                           
                            <div class="offset-10"> <button  class="btn" style="width:100%;">Next</button>
                            </div>
                        </div><!--inputs-->

                       </div>
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
