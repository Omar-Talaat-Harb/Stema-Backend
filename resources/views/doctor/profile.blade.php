<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-Profile(Basic info)</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/Color logo - no background.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>
    <div>
        <div class="row">
            <!-- <div class="col-lg-3 col-md-4 col-sm-5 col-xl-6 bg-black p-5"> -->
            <div class="col-lg-4  p-5 photo">
                <div class="container p-2 m-auto">
                    <center>
                        <div class="img">
                            <img src="{{ asset('assets/images/2-uncropped.jpg') }}" alt="profile photo" class="profile-photo">
                        </div>
                    </center>
                    <h5 style="color: #0EB0BA; text-align: center; margin: 5%; font-weight: lighter;">{{ auth()->user()->role->type }} \ {{$userData->firstname}}
                    </h5>
                    <p style=" text-align: center; margin: 5%;">Regenerative medicine specialist</p>

                    <div class="d-grid mt-4 mb-3 align-self-center justify-content-center">
                        <button class="btn edit"><i class="fas fa-user-edit"></i> Edite Profile Photo</button>
                    </div> <!-- edite code button -->

                    <div class="d-grid mb-3 justify-content-center ">
                        <form action="/logout" method="POST">
                            @csrf
                        <button class="btn logout "><i class="fas fa-door-open"></i> Log Out</button>
                        </form>
                        
                    </div> <!-- logout  button -->
                </div>
            </div> <!-- Photo-div -->

            

            <div class="col-lg-7 basic">

                <nav class="navbar navbar-expand-lg ps-3 navbar-light ">
                    <div class="container-fluid pt-3">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse mt-3 pt-3" id="navbarSupportedContent">
                            <ul class="navbar-nav  me-auto mb-2 ">
                                <li class="nav-item">
                                    <a class="nav-link base" aria-current="page" href="#" onclick="returning()">Basic Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link changePass" href="#" onclick="Changing()">Change Password</a>
                                </li>
                            </ul>

                        </div>
                        <a class="d-flex hstack gap-2 me-5 " href="{{(auth()->user()->role_id==2)? route('services') :route('service1')}}"><img
                                src="{{ asset('assets/images/Color logoo - no background.svg') }}" alt="STEMA" width="120px"></a>
                    </div>
                </nav> <!-- naav -->

                <div class="container p-4">
                    <h3 class="change-pass">Password</h3>

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                    <form class="row g-3 mt-2 p-2" method="post" action="{{ route('updatePassword') }}"
                        enctype="multipart/form-data" enctype='multipart/form-data'>
                        @csrf

                            <div class="d-grid my-auto d-inline ">
                                <label for="inputPassword4" class="form-label change-pass">Current Password</label>
                                <input type="password" class="form-control change-pass" name='oldpassword' id="inputPassword4">
                                {{-- name was empty here --}}
                            </div>

                            <div class="d-grid my-auto d-inline mt-1 ">
                                <label for="inputconPass3" class="form-label change-pass">New password</label>
                                <input type="password" class="form-control change-pass" name="newpassword" id="inputconPass3">
                                {{-- name didn't exist here --}}
                            </div>

                            <div class="d-grid my-auto d-inline mt-1 ">
                                <label for="inputconPass4" class="form-label change-pass">Retype new password</label>
                                <input type="password" class="form-control change-pass" name='confirmpassword' id="inputconPass4">
                                {{-- confirm password was empty here --}}
                            </div>
                            <form class="d-flex hstack gap-2 me-5" role="loging">
                                <a href='{{(auth()->user()->role_id==2)? route('services') :route('service1')}}'   class="btn ms-auto close m-2 change-pass">Close</a>
                                <button class="btn save m-2 change-pass">Save password</button>
                            </form>
                            
                        </form> <!-- end of change password section -->

                        <form class="row g-3 pt-0 p-2" method="post" action="{{ route('updateProfile') }}"
                            enctype="multipart/form-data" enctype='multipart/form-data'>
                            @csrf

                            <div class="col-md-6 basic-info">
                                <label for="inputFname" class="form-label">First Name</label>
                                <input type="text" class="form-control " id="inputFname" name='firstname' value="{{$userData->firstname}}">
                            </div> <!-- first-name -->

                            <div class="col-md-6 basic-info">
                                <label for="inputLName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="inputLName" name='lastname' value="{{$userData->lastname}}">
                            </div> <!-- last-name -->

                            <div class="col-md-6 basic-info">
                                <label for="inputTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="inputTitle"
                                    value="Regenerative medicine specialist">
                            </div> <!-- title -->

                            <div class="col-md-6  basic-info">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name='email' value="{{$userData->email}}">
                            </div> <!-- email -->

                            <div class="col-md-6 basic-info">
                                <label for="inputID" class="form-label">National ID</label>
                                <input type="text" class="form-control" id="inputID" name='nationalid' value="{{$userData->nationalid}}">
                            </div> <!-- ID -->

                            <div class="external basic-info">
                                {{-- <h3>External Links</h3>
                                <div class="col-md-12">
                                    <label for="inputUrl" class="form-label">Facebook</label>
                                    <input type="url" class="form-control" id="inputUrl" value="www.facebook.com/ali">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputUrl2" class="form-label">Twitter</label>
                                    <input type="url" class="form-control" id="inputUrl2" value="www.twitter.com/ali">
                                </div> --}}
                            </div> <!-- external links -->

                            <form class="d-flex hstack gap-2 me-5" role="loging">
                                <a href='{{(auth()->user()->role_id==2)? route('services') :route('service1')}}'   class="btn ms-auto close m-2 basic-info" >Close</a>
                                <button class="btn save m-2 basic-info">Save</button>
                            </form>

                        </form> <!-- end of basic info section -->

                    @if (session()->has('success'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('success') }}
                        </div>
                        
                    @endif
                    @if (session()->has('fail'))
                        <div class="alert alert-danger text-center">
                            {{ session()->get('fail') }}
                        </div>
                        
                    @endif
                </div> <!-- form-container -->


            </div> <!-- basic-info div -->
        </div> <!-- row -->
    </div>
    <script src="{{ asset('assets/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/JS/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('assets/JS/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('assets/JS/script.js') }}"></script>

</body>

</html>
