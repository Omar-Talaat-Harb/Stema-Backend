<nav class="navbar navbar-expand-lg ps-3 navbar-light fixed-top"
        style="background: linear-gradient(to right,#0EB0BA, #3080ab);">
        <div class="container-fluid adminContainer">
            <a class="navbar-brand ms-5 ps-5" href="{{ route('user.index') }}"><img src="{{ asset('assets/images/White logo - no background.png') }}" alt="STEMA"
                    width="125px"></a>

            <!-- <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">
                <input type="text" placeholder="Search" id="search">


                <i class="fas fa-search"
                    style="border-radius: 100%; border:0EB0BA 2px solid; padding:10px;color: white;background-color:#0EB0BA; margin: 10px;"></i>
            </div> -->
            <form  style="position:relative;right:-29%;" action="{{ route('logout') }}" method="POST">
                @csrf
                        <button class="btn">Log out</button>
                    </form>

            <div class="d-flex text-capitalize" style="margin-top:20px;" >
            <div style="color: white; " class="mt-2">
                <h6 style="line-height: 0.8; ">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
                <p style="font-size:15px;">{{ auth()->user()->role->type }}</p>
            </div>

            <div class="mb-3">
                <img src="{{ asset('assets/images/admin photo2.svg') }}" alt="admin" style="margin-right:50px; margin-left: 20px; width:60px ;">
            </div>

        </div>

        </div>
        </div>
    </nav>
