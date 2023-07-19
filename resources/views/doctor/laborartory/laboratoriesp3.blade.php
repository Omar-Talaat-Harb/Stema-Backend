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
            <div class="col-lg-3 col-md-4 col-sm-5 collectionf " style="height:130vh;">
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

                    <div class="ps-4 pt-3"><a href="{{ route('laboratory2') }}" id="prevve"><i
                                class="fa fa-arrow-left arrowprevee"></i></a> </div>
                    <div class="lilanurse pt-2">
                        <a href="{{ route ('showProfile') }}" class="text-black text-decoration-none">
                            <div class="pe-3 text-capitalize">
                                <h6>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
                                <p>{{ auth()->user()->role->type }} </p>
                            </div>

                            <div class="">
                                <img src="{{ asset("assets/images/doctor.svg") }}" alt="" srcset="">
                            </div>
                        </a>
                    </div>


                </div>
                <!-- end top right side -->

                <div class="col-lg-12 mt-3 pe-2">

                    <form action="{{ route('postlaboratory3') }}" method="POST" id="regForm" class=" ps-2 pb-3">
                        @method('post')
                        @csrf
                        <div class="ms-1">
                            <div class="d-flex pt-3 justify-content-between">
                                <h5 class="ps-1 collh5">Flow Cytometry Pre-Processing Test Results</h5>
                                <p class="me-1 mt-2 pagenum">Page 3 of 4</p>

                            </div>
                            <!--1 row -->
                            <div class="col-lg-12  ">


                                <div class=" d-flex inputUnit me-5 ps-2 " style="width: 100%;">
                                    <span class="pt-2">*</span>
                                    <input type="text" class="inputrequiredYes" id="countCalculate"
                                        placeholder="Count of CD34 positive cell preprocessing=Average viable CD34  positive cell percentage * TNC preprocessing" required
                                        value="{{ session()->has('cell.pre_count_of_cd34_positive_cell_preprocessing') ? session()->get('cell.pre_count_of_cd34_positive_cell_preprocessing') : '' }}"name="pre_count_of_cd34_positive_cell_preprocessing">
                                </div>
                                <!-- 1 -->


                                <div class="d-flex  justify-content-between">

                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        
                                        <input type="text" class="inputrequiredYes aprovdis" disabled id="TestPerformedBy"
                                            name="TestPerformedBy" placeholder="{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}"   >
                                    </div>

                                    <!-- <div class=" d-flex inputUnit ms-4 ps-3 ">
                                        <span class="pt-3">*</span>
                                        <input type="text" class="inputrequiredYes " id="TestEnteredBy"
                                            name="TestEnteredBy" placeholder="Test Entered By">
                                    </div> -->
                                    <!-- <div class="listvessels">
                                        <div class=" d-flex inputUnit ms-4 ps-3 " style="width: 502px;">
                                            <span class="pt-3 ">*</span>
                                            <select name="ApprovedStatus" class=" inputrequiredYes  selectcollec pe-3"
                                                id="ApprovedStatus" required>
                                                <option value class="d-none">Approved Status</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Hold">Hold</option>
                                            </select>

                                        </div>
                                    </div> -->
                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        
                                        <input type="text" class="inputrequiredYes aprovdis" disabled name="ApprovedStatus"
                                        id="ApprovedStatus" placeholder="Approved Status" value="{{ session()->get('cell.approved_status') }}" >
                                    </div>


                                </div>
                                <!-- 2 -->
                                <!-- <div class="listApprovedStatus">
                                    <div class=" d-flex inputUnit me-5 ps-3 " style="width: 502px;">
                                        <span class="pt-3 ">*</span>
                                        <select name="ApprovedStatus" class=" inputrequiredYes  selectcollec pe-3"
                                            id="ApprovedStatus">
                                            <option value class="d-none">Approved Status</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Hold">Hold</option>
                                        </select>

                                    </div>
                                </div> -->
                                <!-- 3 -->
                                <div class=" ">
                                    <h5 class="ps-1 collh5">Flow Cytometry Post-Processing Test Results</h5>
                                </div>
                                <!-- 4 -->
                                <div class="d-flex  justify-content-between"><!-- listViabilitypost -->

                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2 ">*</span>
                                        <select
                                            class=" inputrequiredYes  selectcollec pe-3" id="Viabilitytechniquepost" required name="post_vaiblity_teqniqe">
                                            <option value class="d-none">Viability technique</option>
                                            <option value="7AAD">7AAD</option>
                                            <option value="TrepanBlue">Trepan Blue</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <i class="fa-solid fa-caret-down selectarrow"></i>

                                    </div>

                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="ViabilityResultspost"
                                            placeholder="Viability Results"value="{{ session()->has('cell.post_vaiblity_results') ? session()->get('cell.post_vaiblity_results') : '' }}" required name="post_vaiblity_results">
                                    </div>

                                </div>
                                <!-- 5 -->
                                <div class="d-flex  justify-content-between">

                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="ViabilityResultspost"
                                             placeholder="Count of viable cell ( * 10^9 )" value="{{ session()->has('cell.post_count_of_viable_cell') ? session()->get('cell.post_count_of_viable_cell') : '' }}"required name="post_count_of_viable_cell">
                                    </div>

                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="Dilutionfactorpost"
                                            placeholder="Dilution factor"value="{{ session()->has('cell.post_dilution_factor') ? session()->get('cell.post_dilution_factor') : '' }}" required name="post_dilution_factor">
                                    </div>

                                </div>
                                <!-- 6 -->
                                <div class=" d-flex justify-content-between">
                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes" id="Averageviablepost"

                                            placeholder="Average viable CD34 / CD 45 positive cell percentage"value="{{ session()->has('cell.post_average_viable_cd34_cd45_positive_cell_percentage') ? session()->get('cell.post_average_viable_cd34_cd45_positive_cell_percentage') : '' }}" required name="post_average_viable_cd34_cd45_positive_cell_percentage">
                                    </div>
                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="Averageviableabsolutepost"

                                            placeholder="Average viable absolute CD34 positive cell count * 10^6"value="{{ session()->has('cell.post_average_viable_absolute_cd34_positive_cell_count') ? session()->get('cell.post_average_viable_absolute_cd34_positive_cell_count') : '' }}" required name="post_average_viable_absolute_cd34_positive_cell_count">
                                    </div>

                                </div>
                                <!-- 5 -->
                                <div class=" d-flex inputUnit me-5 ps-2 "style="width:495px;">
                                    <span class="pt-2">*</span>
                                    <input type="text" class="inputrequiredYes" id="AverageviableCD34post"value="{{ session()->has('cell.post_average_viable_cd34_positive_cell_percentage') ? session()->get('cell.post_average_viable_cd34_positive_cell_percentage') : '' }}"

                                        placeholder="Average viable CD34  positive cell percentage" required name="post_average_viable_cd34_positive_cell_percentage">
                                </div>
                                <!-- 6 -->


                            </div>



                        </div>
                        <!-- tab 2-->

                        <!----------------------------------->
                        <div><input type="submit"  class="btn mt-4 px-5 "
                            style="font-size: 17px;margin-left:84%;width: 170px;" value="next"></div>

                        <!-- <input type="submit" value="Send" class="btn mt-1 px-5"
                            style="font-size: 17px;margin-left:84%;width: 180px;"> -->

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
