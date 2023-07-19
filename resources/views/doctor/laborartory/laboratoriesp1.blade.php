
<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
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
                            <li class="nav-item licoll circ2">
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




            <div class="col-lg-9 col-md-8 col-sm-7 rightcollside">

                <div class="pt-3 col-12 d-flex trightcollection ">

                    <div class="ps-4 pt-3"><a href="{{ route('disabledcontactdata',$donar->id) }}" id="prevve"><i
                                class="fa fa-arrow-left arrowprevee"></i></a> </div>
                    <div class="lilanurse pt-2">
                        <a href="{{ route ('showProfile') }}" class="text-black text-decoration-none">
                            <div class="pe-3 text-capitalize">
                                <h6>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
                                <p>{{ auth()->user()->role->type }}</p>
                            </div>

                            <div class="">
                                <img src="{{ asset("assets/images/doctor.svg") }}" alt="" srcset="">
                            </div>
                        </a>
                    </div>


                </div>
                <!-- end top right side -->

                <div class="col-lg-12 mt-3 pe-2 ">

                    <form method="POST" id="regForm" class=" ps-2 pb-3">
                        <input type="hidden" id="donar_id" value="{{ $donar->id }}"   name="donar_id">
                        {{-- @method('post') --}}
                        @csrf
                        
                        <div class="tabb ms-2">
                            <div class="d-flex pt-3 justify-content-between">
                                <h5 class="ps-1 collh5">Flow Cytometry Lab Data</h5>
                                <p class="me-1 mt-2 pagenum">Page 1 of 4</p>

                            </div>
                            <!--1 row -->
                            <div class="col-lg-12  ">

                                <div class="d-flex  justify-content-between"> <!-- listqualitybags -->

                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2 ">*</span>
                                        <select  required
                                            class=" inputrequiredYes  selectcollec pe-3" id="qualityofbags" name="quality_of_collection_bags_cleanness">
                                            <option value class="d-none">Quality of collection bags Cleanness</option>
                                            <option value="1">Good</option>
                                            <option value="2">Middle</option>
                                            <option value="0">Bad</option>
                                            <option value="3">Very bad</option>
                                        </select>
                                        <i class="fa-solid fa-caret-down selectarrow"></i>

                                    </div>

                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes "value="{{ session()->has('cell.volume') ? session()->get('cell.volume') : '' }}" id="VolumeML"
                                            placeholder="Volume (ml)" required name="volume">
                                    </div>

                                </div>
                                <!-- 1 -->

                                <div class=" d-flex justify-content-between">
                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="number" class="inputrequiredYes" id="noOfNeedels"
                                            placeholder="No. of needles"value="{{ session()->has('cell.num_of_needles') ? session()->get('cell.num_of_needles') : '' }}" required name="num_of_needles">
                                    </div>
                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="PreWBCsx109L"
                                            placeholder="Pre WBCs x 109/L"value="{{ session()->has('cell.prewbcsx109l') ? session()->get('cell.prewbcsx109l') : '' }}" required name="prewbcsx109l">
                                    </div>

                                </div>
                                <!-- 2 -->
                                <div class="d-flex  justify-content-between">

                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2 ">*</span>
                                        <select  required
                                            class=" inputrequiredYes  selectcollec pe-3" id="Satellitebag" name="satellite_bag">
                                            <option value class="d-none">Satellite bag</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        <i class="fa-solid fa-caret-down selectarrow"></i>

                                    </div>

                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="PreCD4534"
                                            placeholder="Pre_%CD+45/34"value="{{ session()->has('cell.pre_%cd+45/34') ? session()->get('cell.pre_%cd+45/34') : '' }}" required name="pre_cd_45_34">
                                    </div>

                                </div>
                                <!-- 3 -->
                                <div class="d-flex  justify-content-between"> <!-- listClots -->

                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2 ">*</span>
                                        <select  required class=" inputrequiredYes  selectcollec pe-3"
                                            id="Clots" name="clots">
                                            <option value class="d-none">Clots</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        <i class="fa-solid fa-caret-down selectarrow"></i>

                                    </div>

                                    <div class=" d-flex inputUnit ms-4 ps2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="PreviabilityTNC"
                                            placeholder="Pre_viability of TNC"value="{{ session()->has('cell.pre_viability_of_tnc') ? session()->get('cell.pre_viability_of_tnc') : '' }}" required name="pre_viability_of_tnc">
                                    </div>

                                </div>
                                <!-- 4 -->
                                <div class=" d-flex justify-content-between">
                                    <div class=" d-flex inputUnit me-5 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes" id="Netweightgram"
                                            placeholder="Net weight (gram)"value="{{ session()->has('cell.net_weight') ? session()->get('cell.net_weight') : '' }}" required name="net_weight">
                                    </div>
                                    <div class=" d-flex inputUnit ms-4 ps-2 ">
                                        <span class="pt-2">*</span>
                                        <input type="text" class="inputrequiredYes " id="PostWBCsx109L"
                                            placeholder="Post_WBCs x 109/L" value="{{ session()->has('cell.post_wbcsx109/l') ? session()->get('cell.post_wbcsx109/l') : '' }}"required name="post_wbcsx109l">
                                    </div>

                                </div>
                                <!-- 5 -->


                            </div>
                            <!-- end form1 -->



                        </div>
                        <!-- tab 3-->
                        <!-- <div><a href="collectionp2disable.html" class="btn mt-4 px-5 "
                                style="font-size: 17px;margin-left:84%;width: 170px;">Next</a></div> -->

                        <!-- <input type="submit" value="Send" class="btn mt-1 px-5"
                            style="font-size: 17px;margin-left:84%;width: 180px;"> -->

                        <input type="submit"  value ='send' class="btn mt-1 px-5 book"
                            style="font-size: 17px;margin-left:84%;width: 180px;" id="book" name="book">


                    </form>
                    <!-- form -->
                </div>
                <!-- end bottom right side -->
            </div><!--end right side -->

        </div><!--row of page-->
        <div class="continer " id="waitting">
            <div class="row ">
                <div class="col-12"><img src="{{ asset('assets/images/team.png') }}" alt=""></div>
                <h5>We Are Working On Your Data You Will Get The Result In A Few Seconds </h5>
            </div>

        </div><!-- waitting -->

        <section>
            <div class="continer " id="accept">
                <div class="row d-flex">
                    <h4>Your stem cells are <span class="accept">accepted</span> with a 88% acceptance rate</h4>
                    <div class="boundry">
                        <div class="mycontainer">
                            <div class="circular-progress">
                                <div class="value-container">88%</div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="btn accepbtn" href="{{ route('laboratory2') }}">Next</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- accept -->
        <section>

            <div class="continer " id="fail">
                <div class="row d-flex">

                    <h4>Unfotunatly,Your Stem Cells Are <span class="reject">Rejected</span> They Are Not Efficient
                        Enough To Be Stored </h4>
                    <div class="col-12"><img src="{{ asset('assets/images/Feeling sorry-cuate 1.png') }}" alt=""></div>
                    <div>
                        <a class="btn failbtn" href="{{ route('laboratory2') }}">Next</a>
                    </div>
                </div>
            </div>
        </section><!-- fail -->






    </section>








    {{-- <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script> --}}


    <script>
        const waitting = document.getElementById("waitting");
        const accept = document.getElementById("accept");
        const fail = document.getElementById("fail");
        const btn = document.getElementById("book");
        const accepbtn = document.getElementById("accepbtn");
        var loginForm = document.getElementById("regForm");
        var valluee; //model result

        loginForm.addEventListener("submit", (e) => {

            e.preventDefault();
            waitting.style.display = "block";
            //////////////////////////////////
            var quality_of_bags = document.getElementById('qualityofbags').value;
            var num_of_needles = document.getElementById('noOfNeedels').value;
            var satellite_bag = document.getElementById('Satellitebag').value;
            var clots = document.getElementById('Clots').value;
            var netwightgram = document.getElementById('Netweightgram').value;
            var volume = document.getElementById('VolumeML').value;
            var prewbcsx109l = document.getElementById('PreWBCsx109L').value;
            var pre_cd_45_34 = document.getElementById('PreCD4534').value;
            var pre_viability_of_tnc = document.getElementById('PreviabilityTNC').value;
            var post_wbcsx109l = document.getElementById('PostWBCsx109L').value;
            var donar_id = document.getElementById('donar_id').value;

            $.ajax({
                url: "{{ route('postlaboratory1') }}",
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'quality_of_collection_bags_cleanness' : quality_of_bags,
                    'num_of_needles': num_of_needles,
                    'satellite_bag' : satellite_bag,
                    'clots' : clots,
                    'net_weight' : netwightgram,
                    'volume' : volume,
                    'prewbcsx109l' : prewbcsx109l,
                    'pre_cd_45_34' : pre_cd_45_34,
                    'pre_viability_of_tnc' : pre_viability_of_tnc,
                    'post_wbcsx109l' : post_wbcsx109l,
                    'donar_id' : donar_id,
                },
                dataType: 'JSON',
                // contentType: false,
                // cache: false,
                // processData: false,
                async:false,
                success:function(response)
                {
                    // $(form).trigger("reset");
                    // alert(response.success)
                    valluee = response.success;
                },
                error: function(response) {
                }
            },true);
            /////////////////////////////////
            console.log(valluee);
            if (valluee == 0) {
                function acceptfun() {
                    waitting.style.display = "none";
                    accept.style.display = "block"
                };
                setTimeout(acceptfun, 3000);
            } else {
                function failfun() {
                    waitting.style.display = "none";
                    fail.style.display = "block"
                };
                setTimeout(failfun, 3000);
            };

        });






        //////////////////////////acceptance bar///////////
        let progressBar = document.querySelector(".circular-progress");
        let valueContainer = document.querySelector(".value-container");

        let progressValue = 0;
        let progressEndValue = 88;
        let speed = 50;

        let progress = setInterval(() => {
            progressValue++;
            valueContainer.textContent = `${progressValue}%`;
            progressBar.style.background = `conic-gradient(
      #0de526 ${progressValue * 3.6}deg,
      #cadcff ${progressValue * 3.6}deg
    )`;
            if (progressValue == progressEndValue) {
                clearInterval(progress);
            }
        }, speed);



    </script>



    {{-- <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#book").click(function(e){

            e.preventDefault();



            $.ajax({
            type:'POST',
            url:"{{ route('postlaboratory1') }}",
            // data:{name:name, password:password, email:email},
            success:function(data){
                alert(data.success);
                }
            });

        });
    </script> --}}










    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="JS/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>
