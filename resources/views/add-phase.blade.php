@extends('layouts.master')
@section('content')
        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="index.php">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-icon">
                            <a href="{{route('phases')}}">
                                Phases
                            </a>
                        </li>
                        <li class="crumb-icon active">
                            Add Phase
                        </li>
                    </ol>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">
                <div class="card">
                    <div class="col-md-2 pull-right">
                        <a href="roles.php">
                            <button type="button" class="btn btn-primary btn-gradient dark btn-block">Go Back</button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="height: 60px;padding: 7px;">
                                <span class="panel-title" style="font-size: 25px;">Add Phase</span>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">


                                    <!-- Form Wizard -->
                                    <div class="admin-form theme-primary">

                                        <div class="panel">

                                            <form method="post" action="{{$isEdit ?  route('phase.update',$find_phase->id): route('phase.store')}}" id="admin-form">
                                                @csrf
                                                <div class="panel-body">

                                                    <div class="section-divider mb40 mt20"><span> Add Client </span></div>
                                                    <!-- .section-divider -->

                                                    <div class="section row">
                                                        <div class="col-md-12">
                                                            <label for="name" class="field prepend-icon">
                                                                <input type="text" name="name" id="name"
                                                                    class="gui-input" placeholder="Name ..." required value="{{$isEdit ? $find_phase->name : old('name')}}">
                                                                <label for="name" class="field-icon"><i
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
