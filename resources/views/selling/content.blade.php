@extends('layouts.app')
@section('title', 'POS-SMART | Provinces')
@section('selling_content')
{{-- start right_col --}}
<div class="right_col" role="main">

    {{-- start row --}}
    <div class="row">

        {{-- start col --}}
        <div class="col-xs-12 col-sm-12 col-md-12">

            {{-- start breadcrumb --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background: #e9ecef !important;">
                    <li class="breadcrumb-item"><a class="white-text" href="{{route('homes.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Master Data</li>
                    <li class="breadcrumb-item active">Stuffs Out</li>
                </ol>
            </nav>
            {{-- end breadcrumb --}}

            {{-- Showing error when running validate process --}}
            @foreach($errors->all() as $message)
                <div class="alert alert-warning">
                    {{$message}}
                </div>
            @endforeach

            <!-- Notification -->
            @if (session('notification_error'))
                <div class="alert alert-danger">
                    {!! session('notification_error') !!}
                </div>
            @endif
            @if (session('notification_success'))
                <div class="alert alert-success">
                    {!! session('notification_success') !!}
                </div>
            @endif

            {{-- start x_panel --}}
            <div class="x_panel">

                {{-- start x_title --}}
                <div class="x_title">

                    <h1>{!! '<b>Stuffs Out</b>' !!}</h1>
                    
                    <div class="clearfix"></div>
                    
                </div>
                {{-- end x_title --}}

                {{-- start x_content --}}
                <div class="x_content">

                    {{-- start tabpanel --}}
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">List</a></li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Create </a></li>
                    </ul>
                    {{-- end tabpanel --}}

                    {{-- start myTabContent --}}
                    <div id="myTabContent" class="tab-content">

                        {{-- start tabpanel --}}
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <table id="datatable-provinces" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="width: 5%; text-align: center">No</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th style="width: 10%; text-align: center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sellings as $item)
                                    <tr>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- end tabpanel --}}
                        
                        {{-- start tabpanel --}}
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <table id="datatable-selling" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="check-all" class="flat"></th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stuffs as $item)
                                    <tr>
                                        <td><input type="checkbox" id="check-all" class="flat"></td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->stock}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{Form::open(['route' => 'provinces.store', 'class' => 'form-horizontal form-label-left', 'data-parsley-validate'])}}
                            <div class="form-group">
                                {{Form::label('code', 'Code', ['class' => 'control-label col-md-4 col-sm-3 col-xs-12'])}}
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    {{Form::text('code', NULL, ['id' => 'code', 'class' => 'form-control col-md-7 col-xs-12'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('name', 'Name', ['class' => 'control-label col-md-4 col-sm-5 col-xs-12'])}}
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    {{Form::text('name', NULL, ['id' => 'name', 'class' => 'form-control col-md-7 col-xs-12'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('stuff_id', 'Stuff', ['class' => 'control-label col-md-4 col-sm-5 col-xs-12'])}}
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <select name="stuff_id[]" id="stuff_id" class="form-control col-md-7 col-xs-12" multiple>
                                        @foreach ($stuffs as $key => $value)
                                        <option value="{{$value->id}}"> {{$value->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn btn-success'])}}
                            {{Form::close()}}
                        </div>
                        {{-- end tabpanel --}}

                    </div>
                    {{-- end myTabContent --}}

                </div>
                {{-- end x_content --}}

            </div>
            {{-- end x_panel --}}

        </div>
        {{-- end col --}}

    </div>
    {{-- end row --}}

</div>
{{-- end right_col --}}
@endsection