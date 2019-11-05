@extends('layouts.master')
@section('content')

   <!-- Start: Content-Wrapper -->
   <section id="content_wrapper">
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="index.php">Users</a>
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
        @if(session('message'))
            <p class="alert alert-success">{{session('message')}}</p>
        @endif
        <div class="card">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="height: 60px;padding: 7px;">
                        <span class="panel-title" style="font-size: 25px;">Users</span>
                        <div class="widget-menu pull-right">
                            <a href="{{route('user.create')}}">
                                <div class="col-md-12">
                                    <button type="button"
                                        class="btn btn-primary btn-gradient dark btn-block">Add User</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-visible" id="spy2">
                            <div class="panel-body pn" style="padding: 0px;
                             border: none;">
                                <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                                    width="100%" style="border: 1px solid #80808052;">
                                    <thead style="background: #cfe8ff;">
                                        <tr>
                                            <th>Name</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th width="7%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $item)
                                        <tr>
                                            <td>{{$item->first_name}}</td>
                                            <td>{{$item->last_name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>
                                                <a href="{{route('user.edit',$item->id)}}"><i class="fa fa-edit" style="color: green;font-size: 18px;padding-right: 10px;"></i></a>
                                                <a href="{{route('user.delete',$item->id)}}"><i class="fa fa-trash" style="color:orangered;font-size: 18px;"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
