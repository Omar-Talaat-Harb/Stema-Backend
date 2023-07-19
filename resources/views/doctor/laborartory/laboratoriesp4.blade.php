<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-LABORATORIES</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/Color logo - no background.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>

    <section class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-5 collectionf " style="height:110vh;">
                <!-- <div class=""> -->
                <div class="  ps-4 pe-4  leftcollection">
                    <div class="contaier mt-5 col-lg-12 flex-column justify-content-center ">
                        <h3 id="unitAdd">Unit Admission</h3>

                        <ul class="navbar-nav justify-content-center leftco ">
                            <li class="nav-item licoll circ1">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check " aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('disabledregstration',session()->get('cell.donar_id')) }}">
                                    <p class="ps-3 ">Registration</p>
                                </a>
                            </li>

                            <!-- 1 -->
                            <li class="nav-item licoll ">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('disabledcontactdata',session()->get('cell.donar_id')) }}">
                                    <p class="ps-3">Contact Data</p>
                                </a>
                            </li>

                            <!-- 2 -->
                            {{-- <li class="nav-item licoll circ2">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check"></i>
                                </div>
                                <a href="{{ route('disabledcollection',session()->get('cell.donar_id')) }}">
                                    <p class="ps-3">Collection</p>
                                </a>
                            </li> --}}
                            <!-- 3 -->
                            <li class="nav-item licoll circ2">
                                <div class="rr bg-light ">
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>
                                <a href="{{ route('laboratory1',session()->get('cell.donar_id')) }}">
                                    <p class="ps-3">Laboratories</p>
                                </a>
                            </li>
                            <!-- 4 -->
                        </ul>


                    </div>

                </div>
                <!-- </div> -->
            </div><!-- left side bar-->




            <div class="col-lg-9 col-md-8 col-sm-7 rightcollside">

                <div class="pt-3 col-12 d-flex trightcollection ">

                    <div class="ps-4 pt-3"><a href="{{ route('laboratory3') }}" id="prevve"><i
                                class="fa fa-arrow-left arrowprevee"></i></a> </div>
                    <div class="lilanurse pt-2">
                        <a href="{{ route ('showProfile') }}" class="text-black text-decoration-none">
                            <div class="pe-3 text-capitalize">
                                <h6>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
                                <p>{{ auth()->user()->role->type }}</p>
                            </div>

                            <div class="">
                                <img src="{{ asset('assets/images/doctor.svg') }}" alt="" srcset="">
                            </div>
                        </a>
                    </div>


                </div>
                <!-- end top right side -->

                <div class="col-lg-12 mt-3 pe-2">

                    <form action="{{ route('postlaboratory4') }}" method="POST" id="regForm" class=" ps-2 pb-3">
                        @method('post')
                        @csrf
                        <div class="">
                            <div class="d-flex pt-3 justify-content-between">
                                <h5 class="ps-1 collh5">Flow Cytometry Post-Processing Test Results</h5>
                                <p class="me-1 mt-2 pagenum">Page 4 of 4</p>

                            </div>
                            <!--1 row -->
                            <div class="col-lg-12  ">


                                <div class=" d-flex inputUnit me-5 ps-2 " style="width: 100%;">
                                    <span class="pt-2">*</span>
                                    <input type="text" class="inputrequiredYes" id="countCalculatepost"

                                        placeholder="Count of CD34 positive cell preprocessing=Average viable CD34  positive cell percentage * TNC preprocessing" required name="post_count_of_cd34_positive_cell_preprocessing">
                                </div>
                                <!-- 1 -->


                                <div class="d-flex  justify-content-between">

                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        
                                        <input type="text" class="inputrequiredYes aprovdis" id="TestPerformedBypost"
                                        placeholder="{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}" disabled>
                                    </div>

                                    <!-- <div class=" d-flex inputUnit ms-4 ps-3 ">
                                        <span class="pt-3">*</span>
                                        <input type="text" class="inputrequiredYes " id="TestEnteredBypost"
                                            name="TestEnteredBypost" placeholder="Test Entered By">
                                    </div> -->
                                    <!-- <div class="listvessels">
                                        <div class=" d-flex inputUnit ms-4 ps-3 " style="width: 508px;">
                                            <span class="pt-3 ">*</span>
                                            <select name="ApprovedStatuspost" class=" inputrequiredYes  selectcollec pe-3"
                                                id="ApprovedStatuspost" required>
                                                <option value class="d-none">Approved Status</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Hold">Hold</option>
                                            </select>

                                        </div>
                                    </div> -->

                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        
                                        <input type="text" class="inputrequiredYes aprovdis" disabled name="ApprovedStatus"
                                        id="ApprovedStatus" placeholder="Approved Status" value="{{ session()->get('cell.approved_status') }}"  >
                                    </div>


                                </div>
                                <!-- 2 -->
                                <!-- <div class="listApprovedStatus">
                                    <div class=" d-flex inputUnit me-5 ps-3 " style="width: 508px;">
                                        <span class="pt-3 ">*</span>
                                        <select name="ApprovedStatuspost" class=" inputrequiredYes  selectcollec pe-3"
                                            id="ApprovedStatuspost">
                                            <option value class="d-none">Approved Status</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Hold">Hold</option>
                                        </select>

                                    </div>
                                </div> -->
                                <!-- 3 -->

                                <div class="d-flex  justify-content-between">

                                    <input type="text" onfocus="(this.type='time')"
                                        onblur="if(!this.value)this.type='text'" class="inputUnit tdtdd divofform ps-3"
                                        id="Startfreezingtime"
                                        placeholder="Start freezing time " name="start_freezing_time">

                                    <input type="text" class="inputUnit  ps-3" id="StartTemperature"
                                        placeholder="Start Temperature" name="start_temperature">


                                </div>
                                <!-- 4 -->
                                <div class="d-flex  justify-content-between">

                                    <input type="text" onfocus="(this.type='time')"
                                        onblur="if(!this.value)this.type='text'" class="inputUnit tdtdd divofform ps-3"
                                        id="Endfreezingtime"  placeholder="End freezing time " name="end_freezing_time">


                                    <input type="text" class="inputUnit  ps-3" id="EndpointTemperature"
                                        placeholder="End point Temperature" name="end_point_temperature">


                                </div>


                                <!-- 5 -->
                                <div class="d-flex  justify-content-between">


                                    <input type="text" onfocus="(this.type='time')"
                                        onblur="if(!this.value)this.type='text'" class="inputUnit tdtdd divofform ps-3"
                                        id="InjectionStarttime"
                                        placeholder="Injection Start time " name="injection_start_time">

                                    <input type="text" onfocus="(this.type='time')"
                                        onblur="if(!this.value)this.type='text'" class="inputUnit tdtdd  ps-3"
                                        id="InjectionEndtime"
                                        placeholder="Injection End time " name="injection_end_time">


                                </div>
                                <!-- 6 -->



                            </div>
                            <!-- end form1 -->


                        </div>
                        <!-- tab 3-->
                        <!-- <div><a href="laporatoriesp3.html" class="btn mt-4 px-5 "
                                style="font-size: 17px;margin-left:84%;width: 170px;">Next</a></div> -->

                        <input type="submit" value="Send" class="btn mt-1 px-5"
                            style="font-size: 17px;margin-left:84%;width: 180px;">

                    </form>
                    <!-- form -->
                </div>
                <!-- end bottom right side -->
            </div><!--end right side -->

        </div><!--row of page-->







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
