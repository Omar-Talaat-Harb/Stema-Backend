@extends('Admin.layouts.app')
@section('content')

    <section class="admin">
        <div class="container">
            <div class="row">
                <h2 class="col-lg-6 col-md-6 col-sm-6">Add User</h2>
                <form  method="POST" action="{{ route('user.store') }}">
                    @method('post')
                    @csrf
                    <div class="d-flex">
                        <span>*</span>
                        <label for="firstname" class="form-label col-lg-6 col-md-6 col-sm-6">First Name</label>
                        <span>*</span>
                        <label for="lastname" class="form-label col-lg-6 col-md-6 col-sm-6">Last Name</label>
                    </div>

                    <div class="d-flex myspace">

                        <input type="text" class="form-control space" id="firstname" required name="firstname">

                        <input type="text" class="form-control" id="lastname" required name="lastname">
                    </div>

                    <div class="d-flex">
                        <span>*</span>
                        <label for="inputUname" class="form-label col-lg-6 col-md-6 col-sm-6">User Name</label>
                        <span>*</span>
                        <label for="pass" class="form-label col-lg-6 col-md-6 col-sm-6">Password</label>

                    </div>
                    <div class="d-flex  myspace">
                        <input type="text" class="form-control space" id="inputUname" required name="username">
                        <input type="text" class="form-control" id="pass" required name="password">
                    </div>
                    <div class="d-flex">
                        <span>*</span>
                        <label for="email" class="form-label col-lg-6 col-md-6 col-sm-6">Email</label>
                        <span>*</span>

                        <label for="nationalid" class="form-label col-lg-6 col-md-6 col-sm-6">National ID</label>

                    </div>
                    <div class="d-flex myspace">
                        <input type="email" class="form-control space" id="email" required name="email">
                        <input type="text" class="form-control" id="nationalid" required name="nationalid">

                    </div>
                    <div class="d-flex">
                        <label for="Role" style="display: block;"
                            class="form-label col-lg-6 col-md-6 col-sm-6">Role</label>
                        <label for="gender" style="display: block; margin-left:9px;"
                            class="form-label col-lg-6 col-md-6 col-sm-6">Gender</label>

                    </div>
                    <div class="d-flex myspace">
                        <select id="role" class="form-control space" required name="role">
                            <option value="doctor">Doctor</option>
                            <option value="nurse">Nurse</option>

                        </select>
                        <select id="gender" class="form-control" required name="gender">
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
