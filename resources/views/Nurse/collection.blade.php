<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-Collection</title>
    <link rel="shortcut icon" href="{{asset('front/images/Color logo - no background.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('front/CSS/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/style.css')}}">
</head>

<body>
<!-- collection 1 -->
<section class="container-fluid">

    <div class="row">

        <div class="col-lg-3 col-md-4 collectionf" style=" width: 320px;">
            <!-- <div class="collectionf"> -->
            <div class=" ps-4 pe-4  leftcollection ">
                <div class="contaier mt-5 col-lg-12 flex-column justify-content-center">
                    <h3 id="unitAdd">Unit Admission</h3>

                    <ul class="navbar-nav justify-content-center leftco">
                        <li class="nav-item licoll circ1">
                            <div class="rr bg-light vertline">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <a href="regisrtation.html">
                                <p class="ps-3">Registration</p>
                            </a>
                        </li>

                        <!-- 1 -->
                        <li class="nav-item licoll ">
                            <div class="rr bg-light vertline">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <a href="cbu.html">
                                <p class="ps-3">CBU Data</p>
                            </a>
                        </li>

                        <!-- 2 -->
                        <li class="nav-item licoll circ2">
                            <div class="rr bg-light ">
                                <i class="fas fa-ellipsis-h"></i>
                            </div>
                            <a href="collections.html">
                                <p class="ps-3">Collection </p>
                            </a>
                        </li>
                        <!-- 3 -->
                    </ul>


                </div>
                <!-- <i class="fa fa-circle circleleft"></i>
                    <i class="fa fa-circle circleleft cl2"></i> -->
            </div>
            <!-- </div> -->
        </div>


        <!-- end left side -->

        <div class="col-md-9   rightcollside">
            <div class="pt-3 d-flex trightcollection ">
                <button type="button" class="ps-4 " style="background: transparent; border: none;" id="prevBtn"
                        onclick="nextPrev(-1)">
                    <i class="fa fa-arrow-left arrowprevee"></i>
                </button>
                <div class="ps-4 pt-2">
                    <a href="{{route('cbu',['id'=>$id])}}" style="display: none;" id="prevve">
                        <i class="fa fa-arrow-left arrowprevee"></i>
                    </a>
                </div>
                <div class="lilanurse pt-2">
                    <a href="{{route('showProfile')}}" class="text-black text-decoration-none">
                        <div class="pe-3 text-capitalize">
                            <h6>{{\Illuminate\Support\Facades\Auth::user()->username}}</h6>
                            <p>nurse </p>
                        </div>

                        <div class="">
                            <img src="{{ asset('assets/images/nurse.svg') }}" alt="" srcset="">
                        </div>
                    </a>
                </div>


            </div>
            <!-- end top right side -->
            <!--********************************************************************* -->
            <div class="col-md-12 mt-3  container-fluid ">

                <form action="{{route('collection.store')}}" method="post" id="regForm" class=" ps-2 pb-3">
                    @csrf
                    <input type="hidden" name="donar_id" value="{{$id}}">
                    <div class="tab ms-1">
                        <div class="d-flex pt-3 justify-content-between">
                            <h5 class="ps-2 collh5">Cord Eligibility Criteria</h5>
                            <p class="me-1 mt-2 pagenum">Page 1 of 4</p>

                        </div>
                        <!--1 row -->

                        <div class="col-lg-12 col-sm-6 ">
                            <div class="d-flex  justify-content-between">
                                <input type="text" class="inputUnit divofform ps-3" id="cordLength"
                                       name="cord_length" placeholder="Cord Length" style="min-height:46px !important;">
                                <input type="text" class="inputUnit ps-3 " id="placentalWeight"
                                       name="placental_weight" placeholder="Placental Weight" style="min-height:46px !important;">
                            </div>

                            <div class=" d-flex justify-content-between"><!-- listvessels -->
                                <input type="text" class="inputUnit divofform ps-3" id="cordPathology"
                                       name="cord_pathology" placeholder="Cord Pathology " style="min-height:46px !important;">
                                <!--
                                <i class="fa-solid fa-caret-down selectarrow"></i> -->
                                <!-- <select name="" class="inputrequiredYes selectcollec " id="cordVessels" >
                                            <option value class="d-none">Cord has three Vessels</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select> -->
                                     <div class=" d-flex inputUnit " style="min-height:46px !important;">
                                       <select name="three_vesseles" class="inputrequiredYes selectcollec " id="cordVessels" style="min-height: 44px !important;" required>
                                      <option value class="d-none">Cord has three Vessels</option>
                                      <option value="yes">Yes</option>
                                      <option value="no">No</option>
                                        </select>
                                        <i class="fa-solid fa-caret-down selectarrow " style="color: #706E6E;margin-top: 15px; position: relative;    right: 11.5px;"></i>
                                    </div>

                            </div>
                        </div>
                        <!-- end form1 -->
                        <div class="d-flex radiocollection ">
                            <h5 class="ps-1 collh5">Neonatal Eligibility Criteria </h5>
                            <p class="ms-5 mt-2 fw-bold"><span style="color:red;">*</span> Are there any infectious
                                diseases?</p>
                            <div class="ms-4 mt-2 ">
                                <input type="radio" id="yes" name="infectious_diseases" value="yes">
                                <label for="yes" class="me-3">Yes</label>
                                <input type="radio" id="no" name="infectious_diseases" value="no">
                                <label for="no">No</label>
                            </div>
                        </div><!--top form2-->
                        <div class="col-lg-12 col-sm-6 ">


                            <div class=" d-flex inputUnit ps-2" style="width:100%;min-height:46px !important; ">
                                <span class="pt-2 " style="color:red;">*</span>
                                <input type="text" id="specifyans" name="answer" class="inputrequiredYes"style="min-height:44px !important;"
                                       placeholder="Specify your answer">
                            </div>

                            <div class="d-flex  justify-content-between">
                                <input type="text" class="inputUnit divofform ps-3" id="NeonatalApgarScore1m"
                                       name="NeonatalApgarScore1m" placeholder="Neonatal Apgar Score (1 min )"style="min-height:48px !important;">
                                <input type="text" class="inputUnit ps-3 " id="NeonatalApgarScore10m"
                                       name="NeonatalApgarScore10m" placeholder="Neonatal Apgar Score (10 min )" style="min-height:48px !important;">
                            </div>
                            <div class=" d-flex  justify-content-between"><!-- listNeonatal -->
                                <input type="text" class="inputUnit divofform ps-3" id="order_birth"
                                       name="order_birth" placeholder="Neonatal order of Birth " style="min-height:46px !important;">

                                <!-- <select name="three_vesseles" class="inputrequiredYes selectcollec " id="cordVessels" style="min-height: 44px !important;">
                                      <option value class="d-none">Cord has three Vessels</option>
                                      <option value="yes">Yes</option>
                                      <option value="no">No</option>
                                        </select> -->
                                <div class=" d-flex inputUnit " style="min-height:45px !important;">
                                     <select name="gender" class="inputrequiredYes selectcollec"
                                        id="NeonatalGender" style="min-height: 43px !important;">
                                         <option value class="d-none">Neonatal   gender</option>
                                         <option value="male">Male</option>
                                         <option value="female">Female</option>
                                      </select>
                                        <i class="fa-solid fa-caret-down selectarrow " style="color: #706E6E;margin-top: 15px; position: relative;    right: 11.5px;"></i>
                                    </div>

                            </div>
                            <div class="d-flex  justify-content-between">
                                <input type="text" class="inputUnit divofform ps-3" id="NeonatalHead"
                                       name="head_circum" placeholder="Neonatal Head Circumference" style="min-height:47px !important;">
                                <input type="text" class="inputUnit ps-3 " id="NeonatalChest" name="chest"
                                       placeholder="Neonatal Chest measurement" style="min-height:47px !important;">
                            </div>
                        </div>
                        <div class=" mt-4  ">
                            <button type="button" class="btn mt-4 px-5 "
                                    style="font-size: 17px;margin-left:84%;width: 170px;" id="nextBtn"
                                    onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- tab 1-->
                    <!-- ------------------------------------------ -->
                    <!-- ------------------------------------------ -->
                    <div class="tab ms-1">
                        <div class="d-flex pt-3 justify-content-between">
                            <h5 class="ps-1 collh5">Neonatal Eligibility Criteria</h5>
                            <p class="me-1 mt-2 pagenum">Page 2 of 4</p>

                        </div>
                        <!--1 row -->
                        <div class="col-lg-12  ">
                            <div class="d-flex justify-content-between">
                                <input type="text" class="inputUnit divofform ps-3" id="UmbilicalStumpLength"
                                       name="umbilical_stupm" placeholder="Umbilical Stump Length"style="min-height:46px !important;">

                                <input type="text" class="inputUnit ps-3" id="NeonatalBirthweight"
                                       name="birth_weight" placeholder="Neonatal Birth weight"style="min-height:46px !important;width:490px;">

                            </div>

                            <div class=" d-flex justify-content-between">
                                <!-- <div class=" "> -->

                                <!-- <select name="blod_group" class="inputUnit divofform selectcollec "
                                        id="BabyBloodGroup">
                                    <option value class="d-none">Baby Blood Group</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select> -->
                                <div class=" d-flex ps-1 inputUnit " style="width:499px; min-height:46px !important;">
                                        <select name="blod_group" class="inputrequiredYes  selectcollec "
                                            id="BabyBloodGroup"style="min-height: 44px !important;">
                                            <option value class="d-none">Baby Blood Group</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                        <i class="fa-solid fa-caret-down selectarrow"style="color: #706E6E;margin-top: 15px; position: relative;    right: 11.5px;"></i>
                                    </div>

                                <!-- </div> -->
                                <!-- <div class=""> -->

                                <!-- <select name="rh" class="inputUnit selectcollec " id="RH">
                                    <option value class="d-none">RH</option>
                                    <option value="Positive">Positive</option>
                                    <option value="Negative">Negative</option>
                                </select> -->
                                <div class=" d-flex inputUnit" style="width:470px; min-height:46px !important;">
                                        <select name="rh" class="inputrequiredYes selectcollec " id="RH"style="min-height: 44px !important;">
                                            <option value class="d-none">RH</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                        <i class="fa-solid fa-caret-down selectarrow" style="color: #706E6E;margin-top: 15px; position: relative;    right: 11.5px;"></i>
                                    </div>

                                <!-- </div> -->



                            </div>
                        </div>
                        <!-- end form1 -->
                        <div class="d-flex radiocollection " style="margin-top:-10px;">
                            <div class="d-flex ">
                                <p class=" fw-bold pe-1"><span style="color:red;">*</span> Dysmorphic Child</p>
                                <div class="ms-4 ">
                                    <input type="radio" id="DysmorphicChildYes" name="dysmorphic_child" value="yes">
                                    <label for="DysmorphicChildYes" class="me-3">Yes</label>
                                    <input type="radio" id="DysmorphicChildNO" name="dysmorphic_child" value="no">
                                    <label for="DysmorphicChildNO">No</label>
                                </div>
                            </div><!--top form2-->
                            <div class="d-flex ps-4  m-auto">
                                <p class=" fw-bold pe-1 ps-4">Fetal Distress</p>
                                <div class="ms-4 ">
                                    <input type="radio" id="FetalDistressYes" name="fetal_distress" value="yes">
                                    <label for="FetalDistressYes" class="me-3">Yes</label>
                                    <input type="radio" id="FetalDistressNO" name="fetal_distress" value="no">
                                    <label for="FetalDistressNO">No</label>
                                </div>
                            </div> <!--top form2-->
                        </div>
                        <div class="d-flex ps-3 radiocollection ">
                            <p class=" fw-bold pe-3 ">Fetal Anomalies</p>
                            <div class="ms-4" style="margin-right:10px;">
                                <input type="radio" id="FetalAnomaliesYes" name="fetal_anomalies" value="yes">
                                <label for="FetalAnomaliesYes" class="me-3">Yes</label>
                                <input type="radio" id="FetalAnomaliesNO" name="fetal_anomalies" value="no">
                                <label for="FetalAnomaliesNO">No</label>
                            </div>
                        </div><!-- radiocollection -->

                        <div class="col-lg-12 col-sm-6 ">
                            <div class=" pt-3 ">
                                <h5 class="ps-1 collh5">Data Of Collection</h5>
                            </div>

                            <div class="d-flex justify-content-between">
                                <input type="text" class="inputUnit divofform ps-3" id="Doctorname"
                                       name="doctor_name" placeholder="Doctor name"style="min-height:46px !important;">
                                <input type="text" onfocus="(this.type='date')"
                                       onblur="if(!this.value)this.type='text'" class="inputUnit cdcd  ps-3  "
                                       id="DeliveryDate" name="delivery_date" placeholder="Delivery Date"style="min-height:46px !important;">
                                <i class="fa fa-calendar-days calinderdate cald1" style="position:absolute;right:85px !important;margin-top:-2px;"></i>
                            </div>
                            <div class="d-flex justify-content-between">

                                <input type="text" onfocus="(this.type='time')"
                                       onblur="if(!this.value)this.type='text'" class="inputUnit tdtdd divofform ps-3"
                                       id="DeliveryTime" name="delivery_time" placeholder="Delivery Time"style="min-height:46px !important;">

                                <input type="text" onfocus="(this.type='date')"
                                       onblur="if(!this.value)this.type='text'" class="inputUnit cdcd  ps-3  "
                                       id="CollectionBagmanufacturingDate" name="manufturing_date"
                                       placeholder="Collection Bag manufacturing Date"style="min-height:46px !important;">
                                <i class="fa fa-calendar-days calinderdate cald1" style="margin-right:50px!important;margin-top:-2px;"></i>
                            </div>
                            <div class="d-flex justify-content-between">


                                <input type="text" onfocus="(this.type='date')"
                                       onblur="if(!this.value)this.type='text'" class="inputUnit cdcd divofform ps-3  "
                                       id="CollectionBagexpiryDate" name="expiry_date"
                                       placeholder="Collection Bag expiry Date "style="min-height:46px !important;">
                                <i class="fa fa-calendar-days calinderdate cald2" style="position:absolute;left:815px !important;margin-top:-2px;"></i>
                                <!-- <i class="fa fa-calendar-days calinderdate" ></i> -->

                                <input type="text" class="inputUnit ps-3 " id="LotNumber" name="lot_number"
                                       placeholder="Lot Number"style="min-height:46px !important;">


                            </div>

                        </div>
                        <div class=" mt-4  ">
                            <button type="button" class="btn mt-4 px-5 "
                                    style="font-size: 17px;margin-left:84%;width: 170px;" id="nextBtn"
                                    onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- tab 2-->
                    <!-- endform2 -->
                    <!----------------------------------->
                    <div class="tab ms-1">
                        <div class="d-flex pt-3 justify-content-between">
                            <h5 class="ps-1 collh5">Data Of Collection</h5>
                            <p class="me-1 mt-2 pagenum">Page 3 of 4</p>

                        </div>
                        <!--1 row -->
                        <div class="col-lg-12  ">

                            <div class="d-flex justify-content-between">

                                <div class=" d-flex inputUnit me-5 ps-2"style="min-height:46px !important;">
                                    <span class="pt-2" style="color:red;">*</span>
                                    <input type="text" onfocus="(this.type='date')"
                                           onblur="if(!this.value)this.type='text'" class="inputrequiredYes cdcd "
                                           id="CBUcollectionDate" name="cpu_date" placeholder=" CBU collection Date" style="min-height: 44px !important;">
                                    <i class="fa fa-calendar-days calinderdate cald" style="margin-top:-2px; margin-right:-5px;"></i>
                                </div>
                                <!-- <div class=" d-flex inputUnit ps-3">
                                    <span class="pt-3">*</span>
                                    <input type="text" onfocus="(this.type='time')"
                                        onblur="if(!this.value)this.type='text'" class=" inputrequiredYes tdtd "
                                        id="DeliveryTime" name="DeliveryTime" placeholder="Delivery Time">
                                </div> -->
                                <input type="text" class="inputUnit  ps-3 ms-4" id="receivedandsent" name="sent_by"
                                       placeholder="Received from Hospitals and sent By"style="min-height:46px !important;">

                            </div>

                            <div class=" d-flex  justify-content-between"><!--liststatus  -->
                                <!-- <input type="text" class="inputUnit divofform ps-3" id="" name=""
                                    placeholder="Received from Hospitals and sent By"> -->
                                <input type="number" class="inputUnit divofform ps-3" id="Temperatureroom" name="temp_room"
                                       placeholder="Temperature of the room"style="min-height:46px !important;">
                                <div class=" d-flex inputUnit ps-2"style="min-height:46px !important;">
                                    <span class="pt-2" style="color:red;">*</span>
                                    <select name="collection_statues" class=" inputrequiredYes  selectcollec pe-3" id="cordVessels"style="min-height:44px !important;">
                                        <option value class="d-none">Collection Status</option>
                                        <option value="Successfully">Successfully collected</option>
                                        <option value="Failed">Failed</option>
                                        <option value="Rejected">Rejected</option>
                                    </select>
                                    <i class="fa-solid fa-caret-down selectarrow"style="color: #706E6E;margin-top: 15px; position: relative;    right: 11.5px;"></i>
                                </div>

                            </div>
                        </div>
                        <!-- end form1 -->
                        <div class="col-lg-12  ">

                            <div class="d-flex justify-content-between">
                                <!-- <input type="number" class="inputUnit divofform ps-3" id="Temperatureroom" name=""
                                    placeholder="Temperature of the room"> -->

                                <input type="text" onfocus="(this.type='time')"
                                       onblur="if(!this.value)this.type='text'" class="inputUnit divofform tdtdd  ps-3"
                                       id="receivedBankTime" name="cpu_bank_time" placeholder="CBU received to bank time"style="min-height:46px !important;width:508px !important;">
                                <input type="text" onfocus="(this.type='date')"
                                       onblur="if(!this.value)this.type='text'" class="inputUnit cdcd  ps-3 pe-2 "
                                       id="receivedBankDate" name="cpu_bank_date" placeholder="CBU received to bank date"style="min-height:46px !important;width:508px !important;">
                                <i class="fa fa-calendar-days calinderdate cald1"style="margin-right:45px !important;margin-top:-2px;"></i>

                            </div>
                            <!-- <div class="d-flex">
                                <input type="text" onfocus="(this.type='date')"
                                    onblur="if(!this.value)this.type='text'" class="inputUnit cdcd  ps-3 pe-2 "
                                    id="receivedBankDate" name="" placeholder="CBU received to bank date">
                                <i class="fa fa-calendar-days calinderdate cald1"></i>
                            </div> -->
                            <div class=" ">
                                <input type="text" class="inputUnit  ps-3" id="timeDifference" name="time_defrence"
                                       placeholder="Time difference between collection and received to bank"style="min-height:46px !important;">

                            </div>

                        </div>
                        <div class="mt-4 ">
                            <button type="button" class="btn mt-4 px-5 "
                                    style="font-size: 17px;margin-left:84%;width: 170px;" id="nextBtn"
                                    onclick="nextPrev(1)">Next</button>
                        </div>

                    </div>
                    <!-- tab 3-->
                    <div class="tab">
                        <div class="d-flex pt-3 justify-content-between">
                            <h5 class="ps-1 collh5">Cord Eligibility Criteria</h5>
                            <p class="me-1 mt-2 pagenum">Page 4 of 4</p>

                        </div>
                        <!--1 row -->
                        <div class="col-lg-12 col-sm-6 pt-5 mt-1">


                            <div class="d-flex radiocollection mb-3">
                                <p class=" fw-bold pe-1" style="margin-right:200px ;font-size: 24px;">Was the
                                    placenta free from
                                    trauma, tears, pus or inflammation?</p>
                                <div class=" m-auto">
                                    <input type="radio" id="placentafreefromYes" name="placenta_free_trauma" value="yes">
                                    <label for="placentafreefromYes" class="me-3">Yes</label>
                                    <input type="radio" id="placentafreefromNO" name="placenta_free_trauma" value="no">
                                    <label for="placentafreefromNO">No</label>
                                </div>
                            </div>

                            <div class="d-flex radiocollection mb-5">
                                <p class=" fw-bold pe-5" style="margin-right:405px ;font-size: 24px;">Problems
                                    encountered
                                    during collection?</p>
                                <div class=" m-auto mb-5">
                                    <input type="radio" id="problemsdurcollectionYes" name="problems_collection" value="yes">
                                    <label for="problemsdurcollectionYes" class="me-3">Yes</label>
                                    <input type="radio" id="problemsdurcollectionNO" name="problems_collection" value="no">
                                    <label for="problemsdurcollectionNO">No</label>
                                </div>
                            </div>



                        </div>
                        <!-- end form1 -->

                        <div class="mt-5 ">
                            <button type="submit" class="btn mt-4 px-5 "
                                    style="font-size: 17px;margin-left:84%;width: 170px;">finish</button>
                        </div>
                    </div>
                    <!-- tab 4-->






                    <!-- <input type="submit" value="Send" class="btn mt-1 px-5" style="font-size: 17px;margin-left:84%;width: 180px;"> -->
                    <!-- <button type="button" class="btn mt-1 px-5"
                        style="font-size: 17px;margin-left:84%;width: 180px;" id="nextBtn"
                        onclick="nextPrev(1)">Next</button> -->





                </form>
                <!-- form -->
            </div>
            <!-- end bottom right side -->
        </div>
        <!-- end rigth side -->


    </div><!--row-->
</section>








<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevve").style.display = "inline";
            document.getElementById("prevBtn").style.display = "none";
        } else {
            // document.getElementById("prevBtn").innerHTML="<i class='fa fa-arrow-left '>";
            document.getElementById("prevve").style.display = "none";
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Send";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:

    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        return valid; // return the valid status
    }


</script>























<script src="{{asset('JS/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('JS/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{asset('JS/aos.js')}}"></script>
<script>
    AOS.init();
</script>
</body>

</html>
