@extends('Admin.layouts.app')
@section('content')

    <section class="admin">
        <div class="container">
            <div class="row">
                <h2 class="col-lg-6 col-md-6 col-sm-6">View User info</h2>
                <form action="">
                    <div class="d-flex">

                        <label for="firstname" class="form-label col-lg-6 col-md-6 col-sm-6">First Name</label>

                        <label for="lastname" class="form-label col-lg-6 col-md-6 col-sm-6" style="margin-left:9px;">Last Name</label>
                    </div>

                    <div class="d-flex myspace">

                        <input type="text" class="form-control space" id="firstname" value="{{ $user->firstname }}" required disabled >

                        <input type="text" class="form-control" id="lastname" value="{{ $user->lastname }}" required disabled>
                    </div>

                    <div class="d-flex">

                        <label for="inputUname" class="form-label col-lg-6 col-md-6 col-sm-6">User Name</label>



                    </div>
                    <div class="d-flex  myspace">
                        <input type="text" class="form-control  " id="inputUname" value="{{ $user->username }}" required disabled>
                    </div>
                    <div class="d-flex">

                        <label for="email" class="form-label col-lg-6 col-md-6 col-sm-6">Email</label>


                        <label for="nationalid" class="form-label col-lg-6 col-md-6 col-sm-6"  style="margin-left:9px;">National ID</label>

                    </div>
                    <div class="d-flex myspace">
                        <input type="email" class="form-control space" id="email" value="{{ $user->email }}" required disabled>
                        <input type="text" class="form-control" id="nationalid"  value="{{  $user->nationalid }}"required disabled>

                    </div>
                    <div class="d-flex">
                        <label for="Role" style="display: block;"
                            class="form-label col-lg-6 col-md-6 col-sm-6">Role</label>
                        <label for="gender" style="display: block; margin-left:9px;"
                            class="form-label col-lg-6 col-md-6 col-sm-6">Gender</label>

                    </div>
                    <div class="d-flex myspace">
                        <select name="Role" id="role" class="form-control space" required style="color: gray;" disabled>
                            <option value="{{ $user->role->type }}" style="display:none;">{{ $user->role->type }}</option>


                        </select>
                        <select name="gender" id="gender" class="form-control" style="color: gray;" disabled>
                        <option value="{{ $user->gender }}" style="display:none;">{{ $user->gender }}</option>


                        </select>

                    </div>



<div class="d-flex offset-6 col-lg-6 col-md-6 col-sm-6">

                    <a href="{{ route('user.index') }}" value="cancel" class="py-2  " style="position:relative;left:30%;" id="cancel">ok</a>

                </div>
                </form>






            </div>
    </section>
@endsection
