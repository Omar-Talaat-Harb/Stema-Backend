@extends('Admin.layouts.app')
@section('content')

    <section class="admin">
        <div class="container">
            <div class="row">
                <h2 class="col-lg-6 col-md-6 col-sm-6">Edit User info</h2>
                <form action="{{ route('user.update',$user->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="d-flex">

                        <label for="firstname" class="form-label col-lg-6 col-md-6 col-sm-6">First Name</label>

                        <label for="lastname" class="form-label col-lg-6 col-md-6 col-sm-6"  style="margin-left:9px;">Last Name</label>
                    </div>

                    <div class="d-flex myspace">

                        <input type="text" class="form-control space" id="firstname" value="{{ $user->firstname }}" required name="firstname">

                        <input type="text" class="form-control" id="lastname" value="{{ $user->lastname }}" required name="lastname">
                    </div>

                    <div class="d-flex">

                        <label for="inputUname" class="form-label col-lg-6 col-md-6 col-sm-6">User Name</label>

                        <label for="pass" class="form-label col-lg-6 col-md-6 col-sm-6"  style="margin-left:9px;">Password</label>

                    </div>
                    <div class="d-flex  myspace">
                        <input type="text" class="form-control space" id="inputUname" value="{{ $user->username }}" required name="username">
                        <input type="password" class="form-control" id="pass"value="{{ $user->password }}" required name="password">
                    </div>
                    <div class="d-flex">

                        <label for="email" class="form-label col-lg-6 col-md-6 col-sm-6">Email</label>


                        <label for="nationalid" class="form-label col-lg-6 col-md-6 col-sm-6"  style="margin-left:9px;">National ID</label>

                    </div>
                    <div class="d-flex myspace">
                        <input type="email" class="form-control space" id="email" value="{{ $user->email }}" required name="email">
                        <input type="text" class="form-control" id="nationalid"  value="{{ $user->nationalid }}"required name="nationalid">

                    </div>
                    <div class="d-flex">
                        <label for="Role" style="display: block;"
                            class="form-label col-lg-6 col-md-6 col-sm-6">Role</label>
                        <label for="gender" style="display: block; margin-left:9px;"
                            class="form-label col-lg-6 col-md-6 col-sm-6">Gender</label>

                    </div>
                    <div class="d-flex myspace">
                        <select name="role" id="role" class="form-control space" style="color: gray;">
                            <option value="{{ $user->role->type }}" style="display:none;">{{ $user->role->type }}</option>
                            <option value="doctor">Doctor</option>
                            <option value="nurse">Nurse</option>

                        </select>
                        <select name="gender" id="gender" class="form-control" style="color: gray;">
                            <option value="{{ $user->gender }}" style="display:none;">{{ $user->gender }}</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>

                        </select>

                    </div>



<div class="d-flex offset-6 col-lg-6 col-md-6 col-sm-6">

                    <a href="{{ route('user.index') }}" value="cancel" id="cancel">Cancel</a>
                    <button value="save" id="save">Save</button>
                </div>
                </form>






            </div>
    </section>
@endsection
