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
                        <li class="crumb-icon active">
                            Phase
                        </li>
                    </ol>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">
                @if (session('message'))
                    <p class="alert alert-success">{{session('message')}}</p>
                @endif
                <div class="card">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="height: 60px;padding: 7px;">
                                <span class="panel-title" style="font-size: 25px;">Phase</span>
                                <div class="widget-menu pull-right">
                                    <a href="{{route('phase.create')}}">
                                        <div class="col-md-12">
                                            <button type="button"
                                                class="btn btn-primary btn-gradient dark btn-block">Add Phase</button>
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
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th width="7%" class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($phase as $item)

                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>
                                                        <a href="{{route('phase.edit',$item->id)}}"><i class="fa fa-edit" style="color: green;font-size: 18px;padding-right: 10px;"></i></a>
                                                        <a href="{{route('phase.delete',$item->id)}}"><i class="fa fa-trash" style="color:orangered;font-size: 18px;"></i></a>
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
