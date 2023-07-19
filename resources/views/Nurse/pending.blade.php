<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-CBU</title>
    <link rel="shortcut icon" href="{{asset('front/images/Color logo - no background.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('front/CSS/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/style.css')}}">
</head>

<body>
<nav class="navbar navbar-expand-lg ps-3 navbar-light fixed-top"
     style="background: linear-gradient(to right,#0EB0BA, #3080ab);height:90px;">

    <div class="container-fluid">
        <a class="navbar-brand ms-5 ps-5"  href="{{route('service1')}}"><img src="{{ asset('assets/images/White logo - no background.png') }}" alt="STEMA"
                                                        width="100px"></a>

        <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">
            <form style="width:100% " action="{{route('pending')}}" method="get">
            <input name="name" type="text" placeholder="Search" id="search"style="width:350px;height:40px;">




            <button style="border-style: none;background-color: inherit"><i class="fas fa-search"
               style="border-radius: 100%; border:0EB0BA 2px solid; padding:10px;color: white;background-color:#0EB0BA; margin: 10px;"></i></button>
            </form>
        </div>


        <div class="d-flex pt-3  me-5" >
        <a href="{{ route('showProfile') }}" class="text-black text-decoration-none d-flex ">
            <div  class="pe-3 text-capitalize text-light mt-2" style="color: white;" >
                <h6  style="line-height: 0.8; ">{{\Illuminate\Support\Facades\Auth::user()->username}}</h6>
                <p style="font-size:15px;">Nurse</p>
            </div>
            <div>

            <img src="{{ asset('assets/images/nurse.svg') }}" class="rounded-circle" alt="" srcset="" style="width:60px;margin-bottom:15px;">
            </div>
            </a>
        </div>

    </div>
    <div>
        <!-- <div class="col-lg-1 p-4 mt-2">
            <a href="{{route('service1')}}">
                <i class="fas fa-arrow-left fa-2x"></i>
            </a>
        </div> -->
         <!-- back button -->
    </div>

</nav>

<section style="margin-top:10%;">
<div class="col3 d-flex" style="margin-top:100px;">
            <a href="{{route('service1')}}" style="color: #0EB0BA;margin-left:2%;">
                <i class="fas fa-arrow-left fa-2x"></i>
            </a>
        <h2 style="color: #0EB0BA;margin-left:2%;">Pending Files</h2>
    
</div>
 

    
    <div class="container">
        <div class="row">

            <table class="table table-striped"style="text-align:center;">
                <thead>
                <tr>
                    <button  class="headline">No.<th scope="col"></th></button>
                    <button  class="headline" style="margin-left:65px;">File name<th scope="col"></th></button>
                    <button  class="headline" style="margin-left:8%;">Created By<th scope="col"></th></button>
                    <button  class="headline" style="margin-left:11%;">Last modified<th scope="col"></th></button>

                </tr>
                </thead>
                <tbody>
                <?php $i=1 ?>
                @foreach($pendings as $pending)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td class="filename"><a >{{$pending->mother_name_ar}}</a></td>
{{--                    <td class="gry">{{$pending->nurse->name}}</td>--}}
                    <td class="gry">{{$pending->nurse->username}}</td>
                    <td class="gry">{{\Carbon\Carbon::parse($pending->created_at)->diffForHumans() }} </td>



                </tr>
                    <?php $i++ ?>
                @endforeach

                </tbody>
            </table> 

        </div>
        </
    <!-- modal -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">


                <div class="modal-body text-center">

                    <form action="#">
                        <h5>Are you sure you want to delete this user</h5>
                        <div class="mybtn">
                            <button type="button" class="cancel" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="delete">Delete</button>
                        </div>



                    </form>
                </div>


            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!--modal  -->

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
