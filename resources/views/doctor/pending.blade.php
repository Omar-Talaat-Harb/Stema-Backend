<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>STEMA-Pending</title>
<link rel="shortcut icon" href="{{ asset('assets/images/Color logo - no background.png') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/CSS/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/CSS/aos.css') }}">
<link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>




<nav class="navbar navbar-expand-lg ps-3 navbar-light fixed-top"
    style="background: linear-gradient(to right,#0EB0BA, #3080ab);height:90px;">
    <div class="container-fluid">
    <a class="navbar-brand ms-5 ps-5" href="{{ route('services') }}"><img src="{{ asset('assets/images/White logo - no background.png') }}" alt="STEMA"
        width="125px"></a>

    <div class="collapse navbar-collapse ms-1 ps-5" id="navbarSupportedContent">
        
        <form action="{{route('pending')}}" method="get" class="d-flex">
            <input name="name" type="search" placeholder="Search" id="search"style="width:350px;height:40px;margin-bottom:-300px;" required>
          <button style="border-radius:100%; background-color:#0EB0BA; border:#0EB0BA 2px solid;color: white; width:35px; height:35px; margin-left:15px;margin-top:5px;"><i class="fa fa-search"style="" aria-hidden="true"></i></button>
         </form>
        
    </div>

    <div class="pt-3">

        <a href="{{ route('showProfile') }}" class="text-black text-decoration-none d-flex ">
        <div class="pe-3 text-capitalize text-light mt-2">
            <h6 style="line-height: 0.8; ">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
            <p style="font-size:15px;">{{ auth()->user()->role->type }} </p>
        </div>

        <div>
            <img src="{{ asset('assets/images/doctor.svg') }}" class="rounded-circle" alt="" srcset=""  style="margin-right:50px; margin-left: 20px; width:60px ;margin-bottom:15px;">
        </div>
        </a>

    </div>


    </div>
    </div>
</nav>

<section style="margin-top:10%;">
    <div>
    <h2 style="color: #0EB0BA;margin-left:5%;">Pending Files</h2>
    </div>
    <div class="container">
    <div class="row">

        <table class="table table-striped" style="text-align:center;">
        <thead>
            <tr>
                <button  class="headline">No.<th scope="col"></th></button>
                <button  class="headline" style="margin-left:40px;">File name<th scope="col"></th></button>
                <button  class="headline" style="margin-left:8%;">Created By<th scope="col"></th></button>
                <button  class="headline" style="margin-left:12%;">Last modified<th scope="col"></th></button>

            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach($pendings as $pending)
            <tr>
                <th scope="row">{{$i}}</th>
                <td class="filename"><a href="{{ route('disabledregstration',$pending->id) }}">{{$pending->mother_name_ar}}</a></td>
{{--                    <td class="gry">{{$pending->nurse->name}}</td>--}}
                <td class="gry">{{$pending->nurse->username}}</td>
                <td class="gry">{{\Carbon\Carbon::parse($pending->created_at)->diffForHumans() }} </td>



            </tr>
                <?php $i++ ?>
            @endforeach

            
        </tbody>
        </table>
    </div>

    </div>
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
