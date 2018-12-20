@extends('layouts.app')
@section('title', 'POS-SMART | ' .$province->name. ' | Edit')
@section('province_content')
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
                    <li class="breadcrumb-item"><a href="{{route('provinces.index')}}">Provinces</a></li>
                    <li class="breadcrumb-item"><a href="{{route('provinces.show', $province->id)}}">{{$province->name}}</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
            {{-- end breadcrumb --}}

            {{-- Showing error when running validate process --}}
            @foreach($errors->all() as $message)
                <div class="alert alert-warning">
                    {{$message}}
                </div>
            @endforeach
        
            {{-- start x_panel --}}
            <div class="x_panel">
        
                {{-- start x_title --}}
                <div class="x_title">
        
                    <h4>Province Information</h4>
                            
                    <div class="clearfix"></div>
                            
                </div>
                {{-- end x_title --}}
        
                {{-- start x_content --}}
                <div class="x_content">
        
                    {{Form::model($province, ['route' => ['provinces.update', $province->id], 'class' => 'form-horizontal form-label-left', 'data-parsley-validate'])}}
                    {{method_field('PUT')}}
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
                        {{Form::label('country_id', 'Country', ['class' => 'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <select name="country_id" id="country_id" class="form-control col-md-7 col-xs-12">
                                <option value="">Choose...</option>
                                @foreach ($countries as $item)
                                    @if ($province->country_id == $item->id)
                                    <option value="{{$item->id}}" selected>{{$item->code}} - {{$item->name}}</option>
                                    @else
                                    <option value="{{$item->id}}">{{$item->code}} - {{$item->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn btn-success'])}}
                    <a href="{{route('provinces.show', $province->id)}}" class="btn btn-md btn-default" role="button">Back</a>
                    {{Form::close()}}
        
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