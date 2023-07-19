<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stema-Final Report</title>
    <link rel="shortcut icon" href="{{asset('front/images/Color logo - no background.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('front/CSS/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/style.css')}}">
</head>

<body>
<nav class="navbar navbar-expand-lg ps-3 navbar-light " style="background-color:#0EB0BA;">
    <div class="container-fluid">
        <p class="navbar-brand ms-5 ps-5 final-nav">Final Report</p>
        <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">

            <div class="d-flex hstack gap-2 ms-auto me-1 user-services">
                <div class="pt-3 ">
                    <h5 class="text-light text-capitalize">{{\Illuminate\Support\Facades\Auth::user()->username}}</h5>
                    <p>
                        Regenerative medicine specialist
                    </p>
                </div>

                <a href="{{ route('showProfile') }}"> <img src="{{asset('front/images/nurse.svg')}}" alt="user-photo" width="60px"></a>

            </div> <!-- end of doctor profile photo -->



        </div>
    </div> <!-- end of container -->
</nav> <!-- end nav -->
<div class="head-line-rows">
    <div class="row">
        <div class="link-logo">
            <a href="services.html"><img src="{{asset('front/images/Color logoo - no background.svg')}}" width="200px" alt="Stema-Logo"
                                         class=" p-2 m-2">
            </a>
        </div>

    </div> <!-- logo -->
    <div class="row ">
        <center>
            <h1 class=" p-2 m-2">Final Report</h1>
        </center>
    </div> <!-- headline -->
    <div class="row ">
        <p class="text-muted pt-1 pe-1 ps-3 pb-0 m-2 mb-0">Reported by Laila Ahmed at 2-6-2021 02:38 pm</p>
    </div> <!-- date and time text-mute -->
</div> <!-- end of head-line-rows -->


<div class="report-content">
    <div class="mother-data">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">Mother Data</h2>
        </div>

        <form class="d-flex form-output p-2 m-1">
            <div class="col ps-5 p-2 m-1 ">
                <label for="inputText" class="form-label text-capitalize">Mother Name: </label>
                <input type="text" class="report-output " id="inputText" value="{{$report->mother_name_ar}}" disabled>
            </div>
            <div class="col ps-5 p-2 m-1 ">
                <label for="inputText" class="form-label text-capitalize">Hospital Name: </label>
                <input type="text" class="report-output " id="inputText" value="{{$report->cpus->hospital_name}}" disabled>
            </div>
        </form>
    </div> <!-- mother data -->

    <div class="final-report">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">final report</h2>
        </div>

        <form class="d-flex form-output p-2 m-1">
            <div class="col ps-5 p-2">
                <label for="inputText" class="form-label text-capitalize">Neonatal Eligibility Criteria:</label>
                <input  type="text" class="report-output" id="inputText"  style="width: 452px;" value="{{$report->cell->net_weight}}" disabled>
            </div>
        </form>
    </div> <!-- final report -->

    <div class="cbu-data p-0 m-0">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">CBU Data</h2>
        </div>
        <form class="d-flex form-output p-0 m-0">
            <div class="col-6 d-block p-2 m-1">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Collection Date:</label>
                    <input type="text" class="report-output " value="{{ $report->collection->delivery_date}}" id="inputText" style="width: 390px;" disabled>
                </div>
                <div class="col ps-5 p-2 ">
                    <label for="inputText" class="form-label text-capitalize">Received to bank date:</label>
                    <input  value="{{$report->collection->cpu_bank_date }}" type="text" class="report-output " id="inputText" style="width: 313px;" disabled>
                </div>
                <div class="col ps-5 p-2 ">
                    <label for="inputText" class="form-label text-capitalize">Net Weight of Cord Blood Unit:</label>
                    <input type="text" class="report-output " @isset($report->cell)value="{{$report->cell->net_weight}}" @endisset id="inputText" style="width: 220px;" disabled>
                </div>

            </div>
            <div class="col-6 d-block p-2 m-1">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Collection Time:</label>
                    <input type="text"  class="report-output " id="inputText" style="width: 410px;" value="{{date('h:i:s', strtotime($report->collection->delivery_time ?? ''))}}" disabled>
                </div>
                <div class="col ps-5 p-2 ">
                    <label for="inputText" class="form-label text-capitalize">Received to Bank Time:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 325px;" value="{{date('h:i:s', strtotime($report->collection->cpu_bank_time ??'') )}}"  disabled>
                </div>
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Actual Volume of cord Blood Unit:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 200px;" @isset($report->cell) value="{{$report->cell->volume}}" @endisset disabled>
                </div>

            </div>
        </form>
    </div> <!-- cbu data -->

    <div class="cord-blood p-0 m-0">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">Cord Blood Unit Processing Result</h2>
        </div>

        <form class="d-flex form-output p-0 m-0">
            <div class="row d-block p-2 m-1">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Pre-processing Total Nucleated Count TNC:&ThickSpace;</label>
                    <input @isset($report->cell)value="{{$report->cell->pre_vaiblity_results}}" @endisset type="text" class="report-output " id="inputText" disabled>
                </div>
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Post-processing Total Nucleated Count TNC:</label>
                    <input @isset($report->cell)value="{{$report->cell->post_vaiblity_results}}" @endisset type="text" class="report-output " id="inputText" disabled>
                </div>
            </div>
            <div class="row d-block p-2 m-1">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Pre TNC:&ThickSpace;</label>
                    <input @isset($report->cell) value="{{$report->cell->pre_vaiblity_teqniqe	}}" @endisset type="text" class="report-output " id="inputText" disabled>
                </div>
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Post TNC:</label>
                    <input @isset($report->cell)value="{{$report->cell->post_vaiblity_teqniqe	}}" @endisset type="text" class="report-output " id="inputText" disabled>
                </div>
            </div>
        </form>
    </div> <!--cord-blood -->

    <div class="FC-Pre p-0 m-0">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">Flow Cytometry Pre-Processing Test Results</h2>
        </div>

        <form class=" form-output p-0 m-0">
            <div class="row p-2 m-1">

                <div class="col-6 ">
                    <div class="col ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Viability Results</label>
                        <input  @isset($report->cell)value="{{$report->cell->pre_vaiblity_results}}" @endisset   type="text" class="report-output " id="inputText" style="width: 345px;" disabled>
                    </div>
                    <div class="col ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Count of CD34 Positive Cells</label>
                        <input @isset($report->cell) value="{{$report->cell->pre_average_viable_absolute_cd34_positive_cell_count}}" @endisset type="text" class="report-output " id="inputText" style="width: 200px;" disabled>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col ps-5 p-2 ">
                        <label for="inputText" class="form-label text-capitalize">Count of Viable Cell:</label>
                        <input @isset($report->cell)value="{{$report->cell->pre_count_of_viable_cell}}" @endisset type="text" class="report-output " id="inputText" style="width: 360px;" disabled>
                    </div>
                    <div class="col ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Dilution Factor:</label>
                        <input  @isset($report->cell)value="{{$report->cell->pre_dilution_factor}}" @endisset type="text" class="report-output " id="inputText" style="width: 420px;" disabled>
                    </div>
                </div>
            </div> <!-- row end -->

            <div class="col-12 p-2 m-1 ms-3">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Average Viable CD34 Positive Cells Percentage: &ThickSpace;</label>
                    <input @isset($report->cell)value="{{$report->cell->pre_average_viable_cd34_positive_cell_percentage}}" @endisset type="text" class="report-output " id="inputText" style="width: 800px;" disabled>
                </div>
            </div>
            <div class="col-12 p-2 m-1 ms-3">
                <div class="col ps-5 p-2 ">
                    <label for="inputText" class="form-label text-capitalize">Average Viable Absolute CD34 Positive Cells Count: &ThickSpace;</label>
                    <input @isset($report->cell) value="{{$report->cell->pre_average_viable_absolute_cd34_positive_cell_count}}" @endisset type="text" class="report-output " id="inputText" style="width: 745px;" disabled>
                </div>
            </div>
            <div class="col-12 p-2 m-1 ms-3">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Average Viable CD34 / CD45 Positive Cells Percentage: &ThickSpace;</label>
                    <input @isset($report->cell)value="{{$report->cell->pre_average_viable_cd34_cd45_positive_cell_percentage}}" @endisset type="text" class="report-output " id="inputText" style="width: 710px;" disabled>
                </div>
            </div>

        </form>
    </div> <!--FC-Pre-->

    <div class="FC-Post p-0 m-0">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">Flow Cytometry Post-Processing Test Results</h2>
        </div>

        <form class=" form-output p-0 m-0">
            <div class="row p-2 m-1">

                <div class="col-6 ">
                    <div class="col ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Viability Results</label>
                        <input @isset($report->cell)value="{{$report->cell->post_vaiblity_results}}" @endisset type="text" class="report-output " id="inputText" style="width: 345px;" disabled>
                    </div>
                    <div class="col ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Count of CD34 Positive Cells</label>
                        <input @isset($report->cell) value="{{$report->cell->post_count_of_cd34_positive_cell_preprocessing}}" @endisset type="text" class="report-output " id="inputText" style="width: 200px;" disabled>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Count of Viable Cell:</label>
                        <input @isset($report->cell)value="{{$report->cell->post_count_of_viable_cell}}" @endisset type="text" class="report-output " id="inputText" style="width: 360px;" disabled>
                    </div>
                    <div class="col ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Dilution Factor:</label>
                        <input @isset($report->cell)value="{{$report->cell->post_dilution_factor}}" @endisset type="text" class="report-output " id="inputText" style="width: 420px;" disabled>
                    </div>
                </div>
            </div> <!-- row end -->

            <div class="col-12 p-2 m-1 ms-3">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Average Viable CD34 Positive Cells Percentage: &ThickSpace;</label>
                    <input @isset($report->cell)value="{{$report->cell->post_average_viable_cd34_positive_cell_percentage}}" @endisset type="text" class="report-output " id="inputText" style="width: 800px;" disabled>
                </div>
            </div>
            <div class="col-12 p-2 m-1 ms-3">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Average Viable Absolute CD34 Positive Cells Count: &ThickSpace;</label>
                    <input @isset($report->cell)value="{{$report->cell->post_average_viable_absolute_cd34_positive_cell_count}}" @endisset  type="text" class="report-output " id="inputText" style="width: 745px;" disabled>
                </div>
            </div>
            <div class="col-12 p-2 m-1 ms-3">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Average Viable CD34 / CD45 Positive Cells Percentage: &ThickSpace;</label>
                    <input @isset($report->cell)value="{{$report->cell->post_average_viable_cd34_cd45_positive_cell_percentage}}" @endisset type="text" class="report-output " id="inputText" style="width: 710px;" disabled>
                </div>
            </div>

        </form>
    </div> <!--FC-Post-->

    <div class="cryo-details p-0 m-0">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">Cryopreservation Details</h2>
        </div>

        <form class="d-flex form-output p-0 m-0">
            <div class="row d-block p-2 m-1">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">DMSO Injection Date:  </label>
                    <input @isset($report->cell)value="{{$report->cell->injection_start_time}}" @endisset type="text" class="report-output " id="inputText" style="width: 300px;" disabled>
                </div>

                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Start Freezing Time:</label>
                    <input @isset($report->cell) value="{{$report->cell->start_freezing_time}}" @endisset type="text" class="report-output " id="inputText"  style="width: 320px;" disabled>
                </div>
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Start Temperature:</label>
                    <input @isset($report->cell) value="{{$report->cell->start_temperature}}" @endisset type="text" class="report-output " id="inputText" style="width: 333px;" disabled>
                </div>
            </div>
            <div class="row d-block p-2 m-1">
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">DMSO Injection End Time:</label>
                    <input @isset($report->cell) value="{{$report->cell->injection_end_time}}" @endisset type="text" class="report-output " id="inputText" style="width: 430px;" disabled>
                </div>
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">End Freezing Time:</label>
                    <input  @isset($report->cell) value="{{$report->cell->end_freezing_time}}" @endisset type="text" class="report-output " id="inputText"  style="width: 515px;" disabled>
                </div>
                <div class="col ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">End-point Temperature:</label>
                    <input  @isset($report->cell) value="{{$report->cell->end_point_temperature}}" @endisset type="text" class="report-output " id="inputText" style="width: 460px;" disabled>
                </div>
            </div>
        </form>
    </div> <!-- cryo-details-->
    <p class="finalResult mt-2">Result: <span style="color:#1AC616;">{{isset($report) ? $report->cell->approved_status: 'No Result'}}</span></p>
      <p class="sign ms-5 ps-3">Signature\</p>


    <form class="d-flex hstack gap-2 me-5 m-2 p-2" role="loging">
        <a class="btn ms-auto close m-2" href="{{route('report')}}">Back</a>

        <button class="btn save m-2" onclick="window.print();return false;">Print</button>
    </form>

</div> <!-- report-content -->
</div> <!-- content -->




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
