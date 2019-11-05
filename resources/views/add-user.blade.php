@extends('layouts.master')
@section('content')
    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
        <!-- Start: Topbar -->
        <header id="topbar">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <a href="index.php">ABC</a>
                    </li>
                    <li class="crumb-icon">
                        <a href="index.php">
                            <span class="glyphicon glyphicon-home"></span>
                        </a>
                    </li>
                    <li class="crumb-icon active">
                        Users
                    </li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->

        <!-- Begin: Content -->
        <section id="content" class="animated fadeIn">
            <div class="card">
                <div class="col-md-2 pull-right">
                <a href="{{route('users')}}">
                        <button type="button" class="btn btn-primary btn-gradient dark btn-block">Go Back</button>
                    </a>
                </div>
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="height: 60px;padding: 7px;">
                            <span class="panel-title" style="font-size: 25px;">Add Users</span>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">


                                <!-- Form Wizard -->
                                <div class="admin-form theme-primary">

                                    <div class="panel">

                                        <form method="post" action="{{$isEdit ? route('user.update',$find_user->id) : route('user.store')}}" id="admin-form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="panel-body">

                                                <div class="section-divider mb40 mt20"><span> Add User </span></div>
                                                <!-- .section-divider -->

                                                <div class="col-md-12">
                                                    <label for="image" class="field prepend-icon">
                                                        <img src="{{$isEdit ? url('').'/uploads/'.$find_user->image : null  }}" alt="" height="50px">
                                                        <input type="file" name="image" id="image" class="gui-input" placeholder="First name..."
                                                        >
                                                </div><!-- end section -->

                                                <div class="section row">
                                                    <div class="col-md-6">
                                                        <label for="firstname" class="field prepend-icon">
                                                            <input type="text" name="first_name" id="firstname"
                                                                class="gui-input" placeholder="First name..."
                                                                required value="{{$isEdit ? $find_user->first_name : null}}">
                                                            <label for="firstname" class="field-icon"><i
                                                                    class="fa fa-user"></i></label>
                                                        </label>
                                                    </div><!-- end section -->
                                                    <div class="col-md-6">
                                                        <label for="lastname" class="field prepend-icon">
                                                            <input type="text" name="last_name" id="lastname"
                                                                class="gui-input" placeholder="Last name..."
                                                                required value="{{$isEdit ? $find_user->last_name : null}}">
                                                            <label for="lastname" class="field-icon"><i
                                                                    class="fa fa-user"></i></label>
                                                        </label>
                                                    </div><!-- end section -->
                                                </div><!-- end .section row section -->

                                                 <div class="section">
                                                    <label for="useremail" class="field prepend-icon">
                                                        <input type="email" name="email" id="useremail"
                                                            class="gui-input" placeholder="Email address" value="{{$isEdit ? $find_user->email : null}}">
                                                        <label for="useremail" class="field-icon"><i
                                                                class="fa fa-envelope"></i></label>
                                                    </label>
                                                </div><!-- end section -->
                                                <div class="section row">
                                                    <div class="col-md-12">
                                                        <label for="password" class="field prepend-icon">
                                                            <input type="text" name="password" id="password"
                                                                class="gui-input" placeholder="password..."
                                                                required>
                                                            <label for="password" class="field-icon"><i
                                                                    class="fa fa-user"></i></label>
                                                        </label>
                                                    </div><!-- end section -->
                                                </div><!-- end .section row section -->

                                                <div class="panel-footer text-right">
                                                    <button type="submit" class="button btn-primary"> Save </button>

                                                </div><!-- end .form-footer section -->



                                        </form>

                                    </div>

                                </div>
                                <!-- end: .admin-form -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->
@endsection

