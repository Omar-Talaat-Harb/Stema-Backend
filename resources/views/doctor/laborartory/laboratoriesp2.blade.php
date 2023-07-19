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
            <div class="col-lg-3 col-md-4 col-sm-5 collectionf " style="height:115vh;">
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

                    <div class="ps-4 pt-3"><a href="{{ route('laboratory1',session()->get('cell.donar_id')) }}" id="prevve"><i
                                class="fa fa-arrow-left arrowprevee"></i></a> </div>
                    <div class="lilanurse pt-2">
                        <a href="{{ route ('showProfile') }}" class="text-black text-decoration-none">
                            <div class="pe-3 text-capitalize">
                                <h6>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
                                <p>{{ auth()->user()->role->type }} </p>
                            </div>

                            <div class="">
                                <img src="{{ asset("assets/images/doctor.svg")}}" alt="" srcset="">
                            </div>
                        </a>
                    </div>


                </div>
                <!-- end top right side -->

                <div class="col-lg-12 mt-3 pe-2">

                    <form action="{{ route('postlaboratory2') }}" method="POST" id="regForm" class=" ps-2 pb-3">
                        @method('post')
                        @csrf
                        <div class="ms-1">
                            <div class="d-flex pt-3 justify-content-between">
                                <h5 class="ps-1 collh5">Flow Cytometry Lab Data</h5>
                                <p class="me-1 mt-2 pagenum">Page 2 of 4</p>

                            </div>
                            <!--1 row -->
                            <div class="col-lg-12  ">

                                <div class="d-flex  justify-content-between"><!-- listqualitybags -->


                                    <div class=" d-flex  me-5 ps-1 inputUnit">
                                     <select  class="inputrequiredYes selectcollec "
                                        id="SampleType" name="sample_type">
                                        <option value class="d-none">Sample Type</option>
                                        <option value="CordTissue">Cord Tissue</option>
                                        <option value="CordBlood">Cord Blood</option>
                                        <option value="AmnioticFluid">Amniotic Fluid</option>
                                        <option value="Other">Other</option>
                                     </select>
                                     <i class="fa-solid fa-caret-down selectarrow"></i>
                                    </div>




                                    <input type="text" onfocus="(this.type='date')"
                                        onblur="if(!this.value)this.type='text'" class="inputUnit ms-4 cdcd  ps-3 pe-2 " 
                                        id="SamplesentDate"  placeholder="Sample sent Date"value="{{ session()->has('cell.sample_sent_date') ? session()->get('cell.sample_sent_date') : '' }}" name="sample_sent_date">
                                    <i class="fa fa-calendar-days calinderdate cald3" style="margin-right:-15px;"></i>

                                </div>
                                <!-- 1 -->


                                <div class=" ">
                                    <h5 class="ps-1 collh5">Flow Cytometry Pre-Processing Test Results</h5>
                                </div>
                                <!-- 2 -->
                                <div class="d-flex  justify-content-between"><!-- listViability -->

                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2 ">*</span>
                                        <select  class=" inputrequiredYes  selectcollec pe-3"
                                            id="Viabilitytechnique" required name="pre_vaiblity_teqniqe">
                                            <option value class="d-none">Viability technique</option>
                                            <option value="7AAD">7AAD</option>
                                            <option value="TrepanBlue">Trepan Blue</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <i class="fa-solid fa-caret-down selectarrow"></i>

                                    </div>

                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="ViabilityResults"
                                            placeholder="Viability Results" value="{{ session()->has('cell.pre_vaiblity_results') ? session()->get('cell.pre_vaiblity_results') : '' }}"required name="pre_vaiblity_results">
                                    </div>

                                </div>
                                <!-- 3 -->
                                <div class="d-flex  justify-content-between">

                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="ViabilityResults"
                                             placeholder="Count of viable cell ( * 10^9 )"value="{{ session()->has('cell.pre_count_of_viable_cell') ? session()->get('cell.pre_count_of_viable_cell') : '' }}" required name="pre_count_of_viable_cell">
                                    </div>

                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="Dilutionfactor"
                                            placeholder="Dilution factor" value="{{ session()->has('cell.pre_dilution_factor') ? session()->get('cell.pre_dilution_factor') : '' }}"required name="pre_dilution_factor">
                                    </div>

                                </div>
                                <!-- 4 -->
                                <div class=" d-flex justify-content-between">
                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes" id="Averageviable"

                                            placeholder="Average viable CD34 / CD 45 positive cell percentage"value="{{ session()->has('cell.pre_average_viable_cd34_cd45_positive_cell_percentage') ? session()->get('cell.pre_average_viable_cd34_cd45_positive_cell_percentage') : '' }}" required name="pre_average_viable_cd34_cd45_positive_cell_percentage">
                                    </div>
                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="Averageviableabsolute"value="{{ session()->has('cell.pre_average_viable_absolute_cd34_positive_cell_count') ? session()->get('cell.pre_average_viable_absolute_cd34_positive_cell_count') : '' }}"

                                            placeholder="Average viable absolute CD34 positive cell count * 10^6" required name="pre_average_viable_absolute_cd34_positive_cell_count">
                                    </div>

                                </div>
                                <!-- 5 -->
                                <div class=" d-flex inputUnit me-5 ps-2 " style="width:495px;">
                                    <span class="pt-2">*</span>
                                    <input type="text" class="inputrequiredYes" id="AverageviableCD34"value="{{ session()->has('cell.pre_average_viable_cd34_positive_cell_percentage') ? session()->get('cell.pre_average_viable_cd34_positive_cell_percentage') : '' }}"

                                        placeholder="Average viable CD34  positive cell percentage" required name="pre_average_viable_cd34_positive_cell_percentage">
                                </div>
                                <!-- 6 -->


                            </div>
                            <!-- end form1 -->


                        </div>
                        <!-- tab 1-->
                        <!-- ------------------------------------------ -->
                        <div>
                            <input type="submit"  class="btn mt-4 px-5 "
                                style="font-size: 17px;margin-left:84%;width: 170px;" value="next">
                            </div>

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
